@extends('layouts.print')

@section('title', 'Pencatatan Imunisasi Anak')

@section('content')
    <div class="container-fluid px-4">
        <!-- Header Section -->
        <div class="text-center my-4">
            <h3 class="fw-bold mb-1"><u>PENCATATAN IMUNISASI ANAK</u></h3>
            <div class="border-top border-dark mt-2 mx-auto" style="width: 250px;"></div>
            <p class="fw-semibold">No. Register Kohort: {{ $data_anak['no_register'] ?? '.........................' }}</p>
        </div>

        <!-- Data Anak -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block">DATA ANAK</h5>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Nama Anak</div>
                <div class="col-sm-3">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ $data_anak['nama'] ?? '.........................' }}
                    </div>
                </div>
                <div class="col-sm-2 col-form-label fw-semibold">Jenis Kelamin</div>
                <div class="col-sm-4">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ $data_anak['jenis_kelamin'] ?? '.........................' }}
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Tanggal Lahir</div>
                <div class="col-sm-3">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <td>
                            @if (!empty($data['tanggal']) && $data['tanggal'] != '-')
                                {{ \Carbon\Carbon::parse($data['tanggal'])->isoFormat('D MMMM Y') }}
                            @else
                                .........................
                            @endif
                        </td>
                    </div>
                </div>
                <div class="col-sm-2 col-form-label fw-semibold">Usia</div>
                <div class="col-sm-4">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ $data_anak['usia'] ?? '......' }}
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Berat Lahir</div>
                <div class="col-sm-3">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ $data_anak['berat_lahir'] ?? '......' }} gram
                    </div>
                </div>
                <div class="col-sm-2 col-form-label fw-semibold">Panjang Lahir</div>
                <div class="col-sm-4">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ $data_anak['panjang_lahir'] ?? '......' }} cm
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Nama Wali</div>
                <div class="col-sm-3">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ $data_wali['nama'] ?? '.........................' }}
                    </div>
                </div>
                <div class="col-sm-2 col-form-label fw-semibold">Hubungan</div>
                <div class="col-sm-4">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ $data_wali['status'] ?? '.........................' }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-form-label fw-semibold">Alamat</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ $data_anak['alamat'] ?? '...............................................................................................................' }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Riwayat Imunisasi -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block text-center">RIWAYAT IMUNISASI</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="5%" class="text-center">No</th>
                        <th width="25%">Jenis Imunisasi</th>
                        <th width="20%">Tanggal</th>
                        <th width="15%" class="text-center">Usia Anak</th>
                        <th width="20%">Tempat</th>
                        <th width="15%">Petugas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vaksin_dasar as $jenis)
                        @php
                            $data = $imunisasi->where('vaksin.nama_vaksin', $jenis)->first();
                        @endphp
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $jenis }}</td>
                            <td>{{ optional($data)->tanggal ? \Carbon\Carbon::parse($data->tanggal)->isoFormat('D MMMM Y') : '.........................' }}
                            </td>
                            <td class="text-center">
                                @if ($data && $anak->tgl_lahir)
                                    {{ \Carbon\Carbon::parse($data->tanggal)->diffInMonths($anak->tgl_lahir) }} Bulan
                                @else
                                    -
                                @endif
                            </td>
                            <td>{{ optional($data)->tempat ?? '.........................' }}</td>
                            <td>{{ optional($data)->paraf ?? '.........................' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Catatan Khusus -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block text-center">CATATAN KHUSUS</h5>
            <div class="row mb-3">
                <div class="col-sm-3 col-form-label fw-semibold">Riwayat Alergi</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        ...............................................................................................................
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 col-form-label fw-semibold">Reaksi Imunisasi</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        ...............................................................................................................
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-form-label fw-semibold">Keterangan Tambahan</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ optional($anak->bayiBaruLahir->first())->keterangan_tambahan ?? '...............................................................................................................' }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Tanda Tangan -->
        <div class="signature-container"
            style="display: flex !important; justify-content: space-between !important; align-items: flex-end; margin-top: 3rem; page-break-inside: avoid;">
            <!-- Tanggal -->
            <div class="text-center" style="width: 48%;">
                <p style="margin-bottom: 0.5rem; font-size: 12pt;">{{ $anak->kabupaten ?? 'Kota Contoh' }},
                    {{ \Carbon\Carbon::parse($tanggal)->isoFormat('D MMMM Y') ?? \Carbon\Carbon::now()->isoFormat('D MMMM Y') }}
                </p>
            </div>

            <!-- Petugas -->
            <div class="text-center" style="width: 48%;">
                <p style="margin-bottom: 1.5rem; font-size: 12pt;">Petugas Imunisasi</p>
                <div style="border-top: 1px solid #000; width: 200px; margin: 0 auto 0.5rem;"></div>
                <p style="font-weight: bold; margin-bottom: 0; font-size: 12pt;">{{ $petugas ?? 'Nama Petugas' }}</p>
                <p style="font-size: 11pt; color: #6c757d; margin-bottom: 0;">NIP.
                    {{ $nip_petugas ?? '.........................' }}</p>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        @page {
            size: A4;
            margin: 20mm;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 12pt;
            line-height: 1.5;
        }

        .kop {
            font-family: Arial, sans-serif;
        }

        .form-control-plaintext {
            min-height: 1.5em;
        }

        .border-dark {
            border-color: #000 !important;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #000;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            vertical-align: top;
        }

        /* Signature section fixes */
        @media print {
            .signature-container {
                display: flex !important;
                flex-direction: row !important;
            }

            /* Chrome specific fix */
            body {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
                padding: 10px;
                margin: 0;
            }
        }

        /* Prevent unwanted breaks */
        .no-break {
            page-break-inside: avoid;
            break-inside: avoid;
        }
    </style>
@endsection

{{-- @section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                window.print();
                setTimeout(function() {
                    window.close();
                }, 1000);
            }, 500);
        });
    </script>
@endsection --}}
