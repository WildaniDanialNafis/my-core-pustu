                          <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                              data-bs-target="{{ '#' . $table . 'CreateModal' }}">
                              + Tambah
                          </button>
                          <div class="modal fade" id="{{ $table . 'CreateModal' }}" tabindex="-1"
                              aria-labelledby="{{ '#' . $table . 'CreateModalLabel' }}" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="{{ $table . 'CreateModalLabel' }}">Tambah Data
                                              {{ $table }}
                                          </h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal"
                                              aria-label="Close"></button>
                                      </div>
                                      <form id="formTambahData" method="POST" action="{{ '/' . str_replace('_', '-', $table) . '/store' }}">
                                          @csrf
                                          <div class="modal-body">
                                              <!-- Form untuk input data -->
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
                                              <button type="button" class="btn btn-secondary"
                                                  data-bs-dismiss="modal">Tutup</button>
                                              <!-- Tombol Submit -->
                                              <button type="submit" class="btn btn-primary"
                                                  id="submitForm">Simpan</button>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
