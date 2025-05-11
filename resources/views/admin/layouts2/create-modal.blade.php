<!-- Add New Item Modal -->
<div class="modal fade" id="{{ $table . 'AddModal' }}" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addModalLabel">
                    <i class="fas fa-plus-circle me-2"></i>Tambah Data Baru
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="{{ $table . 'AddForm' }}" method="POST">
                @csrf
                @method('POST')
                <div class="modal-body">
                    @foreach ($columns as $index => $column)
                    <!-- Cek apakah kolom adalah id (gunakan index) atau 'created_at' / 'updated_at' (gunakan nama kolom) -->
                    @if (!($index === 0 || in_array($column, ['created_at', 'updated_at'])))
                        <div class="mb-3">
                            <label for="{{ $column }}" class="form-label">
                                {{ ucfirst(str_replace('_', ' ', $column)) }}
                            </label>

                            @php
                                // Mendapatkan tipe kolom
                                $type = $columnTypes[$column];
                                // Tentukan tipe input berdasarkan tipe kolom
                                $inputType = 'text'; // Default type

                                if ($type === 'bigint') {
                                    $inputType = 'number';
                                } elseif ($type === 'varchar' || $type === 'char') {
                                    $inputType = 'text';
                                } elseif ($type === 'date') {
                                    $inputType = 'date';
                                } elseif ($type === 'timestamp') {
                                    $inputType = 'datetime-local';
                                } elseif ($type === 'text') {
                                    $inputType = 'textarea';
                                }

                                // Untuk kolom 'id_foreign', ganti menjadi 'select'
                                if ($column === $foreignColumn) {
                                    $inputType = 'select';
                                }
                            @endphp

                            @if ($inputType == 'select')
                                <select class="form-select" id="{{ $column }}"
                                    name="{{ $column }}" required>
                                    <option value="" disabled selected>Pilih
                                        Pengguna</option>
                                    @foreach ($foreignDatas as $foreignData)
                                        <option
                                            value="{{ $foreignData[$foreignColumn] }}">
                                            {{ $foreignData[$columnDiambil[1]] }}
                                        </option>
                                    @endforeach
                                </select>
                            @elseif ($inputType == 'textarea')
                                <textarea class="form-control" id="{{ $column }}" name="{{ $column }}" placeholder="{{ $column }}"
                                    required></textarea>
                            @else
                                <input type="{{ $inputType }}" class="form-control"
                                    id="{{ $column }}" name="{{ $column }}"
                                    placeholder="{{ $column }}" required>
                            @endif
                        </div>
                    @endif
                @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <i class="fas fa-times me-2"></i>Batal
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-2"></i>Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>