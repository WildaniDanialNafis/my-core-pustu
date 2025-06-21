<!-- Edit Modal -->
<div class="modal fade" id="{{ $table . 'EditModal' }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="editModalLabel">
                    <i class="fas fa-edit me-2"></i>Edit Data
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form id="{{ $table . 'EditForm' }}" method="POST" class="edit-form">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div id="editModalContent">
                        @foreach ($columns as $index => $column)
                            @if (!($index === 0 || in_array($column, ['created_at', 'updated_at'])))
                                <div class="mb-3">
                                    <label for="{{ $column }}" class="form-label">
                                        {{ ucfirst(str_replace('_', ' ', $column)) }}
                                    </label>

                                    @php
                                        $type = $columnTypes[$column];
                                        $inputType = 'text';

                                        if ($type === 'bigint') {
                                            $inputType = 'number';
                                        } elseif (in_array($type, ['varchar', 'char'])) {
                                            $inputType = 'text';
                                        } elseif ($type === 'date') {
                                            $inputType = 'date';
                                        } elseif ($type === 'timestamp') {
                                            $inputType = 'datetime-local';
                                        } elseif ($type === 'text') {
                                            $inputType = 'textarea';
                                        }

                                        if ($column === $foreignColumn) {
                                            $inputType = 'select';
                                        }
                                    @endphp

                                    @if ($inputType === 'select')
                                        <select class="form-select" id="{{ $column }}" name="{{ $column }}">
                                            <option value="" disabled selected>Pilih Pengguna</option>
                                            @foreach ($foreignDatas as $foreignData)
                                                <option value="{{ $foreignData[$foreignColumn] }}">
                                                    {{ $foreignData[$columnDiambil[1]] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    @elseif ($inputType === 'textarea')
                                        <textarea class="form-control" id="{{ $column }}" name="{{ $column }}"
                                            placeholder="{{ $column }}"></textarea>
                                    @else
                                        <input type="{{ $inputType }}" class="form-control" id="{{ $column }}"
                                            name="{{ $column }}" placeholder="{{ $column }}">
                                    @endif

                                    {{-- Tempat munculnya error --}}
                                    <div class="invalid-feedback d-block" id="edit-error-{{ $column }}"></div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <i class="fas fa-times me-2"></i>Batal
                    </button>
                    <button type="submit" class="btn btn-warning text-white">
                        <i class="fas fa-save me-2"></i>Perbarui
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
