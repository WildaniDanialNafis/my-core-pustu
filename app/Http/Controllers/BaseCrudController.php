<?php

namespace App\Http\Controllers;

use App\Traits\AutoValidationRules;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Collection;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

abstract class BaseCrudController extends Controller
{
    use AutoValidationRules;

    protected $model;
    protected $tableName;
    protected $foreignModel = null;
    protected $foreignColumns = [];
    protected $foreignRelation = null;
    protected $validationRules = [];
    protected $title;

    protected function ensureValidationRules()
    {
        if (empty($this->validationRules)) {
            $this->initValidationRules();
        }
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return view('admin.layouts2.ajax', $this->getTableMetadata());
        }

        return view('admin.layouts2.template-table', $this->getTableMetadata());
    }

    public function create(Request $request)
    {
        $columns = Schema::getColumnListing($this->tableName);

        if ($request->input('columns') === 'columns') {

            if (!empty($this->foreignRelation) && is_array($this->foreignColumns)) {
                $relationTable = Str::snake($this->foreignRelation);
                foreach ($this->foreignColumns as $col) {
                    $columns[] = "{$relationTable}.{$col}";
                }
            }

            return response()->json(['columns' => $columns]);
        }

        $query = $this->model::query();
        $searchValue = $request->input('search.value');

        if (!empty($searchValue)) {
            $query->where(function ($q) use ($searchValue, $columns) {
                foreach ($columns as $column) {
                    $q->orWhere($column, 'like', '%' . $searchValue . '%');
                }
            });
        }

        if ($this->foreignRelation) {
            $query->with($this->foreignRelation);
        }

        $primaryKey = (new $this->model)->getKeyName();
        $totalRecords = $this->model::count();
        $filteredRecords = $query->count();

        $data = $query->orderByDesc($primaryKey)
                     ->skip($request->input('start', 0))
                     ->take($request->input('length', 10))
                     ->get();

        return response()->json([
            'draw' => intval($request->input('draw')),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $filteredRecords,
            'data' => $data,
        ]);
    }

    public function store(Request $request)
    {
        $this->ensureValidationRules();
        $validated = $request->validate($this->validationRules);
        $this->model::create($validated);

        return redirect()->route(str_replace('_', '-', $this->tableName) . '.index')
                         ->with('success', 'Data berhasil ditambahkan!');
    }

    public function update(Request $request, string $id)
    {
        $this->ensureValidationRules();
        $validated = $request->validate($this->validationRules);
        $data = $this->model::findOrFail($id);
        $data->update($validated);

        return redirect()->route(str_replace('_', '-', $this->tableName) . '.index')
                         ->with('success', 'Data berhasil diperbarui!');
    }

    public function edit(string $id)
    {
        $data = $this->model::with($this->foreignRelation)->findOrFail($id);
        $columns = Schema::getColumnListing($this->tableName);
        return response()->json([
            'data' => $data,
            'columns' => $columns
        ]);
    }

    public function destroy(string $id)
    {
        try {
            $data = $this->model::findOrFail($id);
            $data->delete();
            return response()->json(['success' => 'Data berhasil dihapus!']);
        } catch (Exception $e) {
            Log::error('Error saat menghapus data:', [
                'error' => $e->getMessage(),
                'id' => $id
            ]);
            return response()->json([
                'error' => 'Terjadi kesalahan saat menghapus data.',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    // public function ajax()
    // {
    //     return view('admin.layouts2.ajax', $this->getTableMetadata());
    // }

    protected function getTableMetadata()
    {
        $columns = Schema::getColumnListing($this->tableName);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($this->tableName, $column);
        }

        $foreignDatas = [];
        $foreignColumn = null;

        if ($this->foreignModel && $this->foreignRelation) {
            $modelInstance = new $this->model();
            $foreignColumn = $modelInstance->{$this->foreignRelation}()->getForeignKeyName();
            $foreignDatas = $this->foreignModel::all($this->foreignColumns);
        }

        return [
            'table' => $this->tableName,
            'columns' => $columns,
            'columnTypes' => $columnTypes,
            'foreignDatas' => $foreignDatas,
            'foreignColumn' => $foreignColumn,
            'columnDiambil' => $this->foreignColumns,
            'title' => $this->title
        ];
    }

    public function exportExcel(): BinaryFileResponse
    {
        $columns = Schema::getColumnListing($this->tableName);
        $query = $this->model::query();

        if ($this->foreignRelation) {
            $query->with($this->foreignRelation);
        }

        $data = $query->get();

        $exportData = $data->map(function ($item) use ($columns) {
            $row = [];
            foreach ($columns as $column) {
                $row[$column] = $item->$column;
            }

            // Ambil foreign data jika ada
            if ($this->foreignRelation && is_array($this->foreignColumns)) {
                $relationData = $item->{$this->foreignRelation};
                foreach ($this->foreignColumns as $foreignCol) {
                    $row[$this->foreignRelation . '.' . $foreignCol] = $relationData->{$foreignCol} ?? null;
                }
            }

            return $row;
        });

        $filename = $this->tableName . '_' . now()->format('Ymd_His') . '.xlsx';

        return Excel::download(new class($exportData) implements \Maatwebsite\Excel\Concerns\FromCollection, \Maatwebsite\Excel\Concerns\WithHeadings {
            private $data;

            public function __construct($data)
            {
                $this->data = $data;
            }

            public function collection(): Collection
            {
                return collect($this->data);
            }

            public function headings(): array
            {
                return array_keys($this->data->first() ?? []);
            }
        }, $filename);
    }

    public function importExcel(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv'
        ]);

        try {
            $file = $request->file('file');
            
            $import = new class($this->model, $this->tableName, $this->foreignRelation, $this->foreignColumns) 
                implements \Maatwebsite\Excel\Concerns\ToModel, 
                        \Maatwebsite\Excel\Concerns\WithHeadingRow,
                        \Maatwebsite\Excel\Concerns\WithValidation {
                
                private $model;
                private $tableName;
                private $columns;
                private $foreignRelation;
                private $foreignColumns;
                private $validationRules;

                public function __construct($model, $tableName, $foreignRelation = null, $foreignColumns = [])
                {
                    $this->model = $model;
                    $this->tableName = $tableName;
                    $this->columns = Schema::getColumnListing($tableName);
                    $this->foreignRelation = $foreignRelation;
                    $this->foreignColumns = $foreignColumns;
                    
                    // Jika ada validasi rules di controller, gunakan itu
                    if (method_exists($model, 'getValidationRules')) {
                        $this->validationRules = (new $model)->getValidationRules();
                    }
                }

                public function model(array $row)
                {
                    $data = [];
                    
                    // Filter hanya kolom yang ada di tabel
                    foreach ($row as $key => $value) {
                        $normalizedKey = Str::snake($key); // Normalisasi nama kolom (camelCase to snake_case)
                        if (in_array($normalizedKey, $this->columns)) {
                            $data[$normalizedKey] = $value;
                        }
                    }

                    // Handle foreign key jika ada
                    if ($this->foreignRelation && !empty($this->foreignColumns)) {
                        $relationModel = (new $this->model)->{$this->foreignRelation}()->getRelated();
                        $foreignData = [];
                        
                        foreach ($this->foreignColumns as $col) {
                            if (isset($row[$col])) {
                                $foreignData[$col] = $row[$col];
                            }
                        }
                        
                        if (!empty($foreignData)) {
                            $relation = $relationModel::firstOrCreate($foreignData);
                            $foreignKey = (new $this->model)->{$this->foreignRelation}()->getForeignKeyName();
                            $data[$foreignKey] = $relation->id;
                        }
                    }

                    return new $this->model($data);
                }

                public function rules(): array
                {
                    if (!empty($this->validationRules)) {
                        return $this->validationRules;
                    }
                    
                    // Fallback rules sederhana
                    $rules = [];
                    foreach ($this->columns as $column) {
                        $rules[$column] = ['nullable'];
                    }
                    return $rules;
                }

                public function prepareForValidation(array $row): array
                {
                    // Normalisasi nama kolom
                    $normalized = [];
                    foreach ($row as $key => $value) {
                        $normalized[Str::snake($key)] = $value;
                    }
                    return $normalized;
                }
            };

            Excel::import($import, $file);

            return redirect()->back()->with('success', 'Data berhasil diimpor!');

        } catch (\Exception $e) {
            Log::error('Error importing data:', [
                'error' => $e->getMessage(),
                'table' => $this->tableName,
                'trace' => $e->getTraceAsString()
            ]);
            
            $errorMessage = 'Terjadi kesalahan saat mengimpor data.';
            if ($e instanceof \Maatwebsite\Excel\Validators\ValidationException) {
                $errorMessage .= ' Error validasi: ' . implode(', ', $e->errors());
            } else {
                $errorMessage .= ' ' . $e->getMessage();
            }
            
            return redirect()->back()
                ->with('error', $errorMessage)
                ->withInput();
        }
    }
}
