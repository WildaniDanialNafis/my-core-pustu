<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;

abstract class BaseCrudController extends Controller
{
    protected $model;
    protected $tableName;
    protected $foreignModel = null;
    protected $foreignColumns = [];
    protected $foreignRelation = null; // default null, akan gunakan relasi otomatis jika diisi
    protected $validationRules = [];

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
            'columnDiambil' => $this->foreignColumns
        ];
    }

    public function index()
    {
        return view('admin.layouts2.template-table', $this->getTableMetadata());
    }

    public function create(Request $request)
    {
        $columns = Schema::getColumnListing($this->tableName);
    
        if ($request->has('columns') && $request->input('columns') === 'columns') {
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
        $validated = $request->validate($this->validationRules);
        $this->model::create($validated);
        return redirect()->route("{$this->tableName}.index")->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit(string $id)
    {
        $data = $this->model::findOrFail($id);
        $columns = Schema::getColumnListing($this->tableName);
        return response()->json([
            'data' => $data,
            'columns' => $columns
        ]);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate($this->validationRules);
        $data = $this->model::findOrFail($id);
        $data->update($validated);
        return redirect()->route("{$this->tableName}.index")->with('success', 'Data berhasil diperbarui!');
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

    public function ajax()
    {
        return view('admin.layouts2.ajax', $this->getTableMetadata());
    }
}
