@extends('layouts.print')

@section('title', 'Formulir Bayi Baru Lahir')

@section('content')
    <div class="container-fluid px-4">
        <!-- Header Section -->
        <div class="text-center my-4">
            <h3 class="fw-bold mb-1"><u>FORMULIR BAYI BARU LAHIR</u></h3>
            <div class="border-top border-dark mt-2 mx-auto" style="width: 200px;"></div>
        </div>

        <!-- General Information -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block">DATA UMUM</h5>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Nama Bayi</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ $bayi->nama ?? '.........................' }}</div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Tanggal Lahir</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ $bayi->tanggal_lahir ? \Carbon\Carbon::parse($bayi->tanggal_lahir)->isoFormat('D MMMM Y') : ($tanggal ? \Carbon\Carbon::parse($tanggal)->isoFormat('D MMMM Y') : '.........................') }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-form-label fw-semibold">Nama Ibu</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ $ibu->nama ?? '.........................' }}</div>
                </div>
            </div>
        </div>

        <!-- Baby Physical Data -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block">DATA FISIK BAYI</h5>
            <div class="row mb-2">
                <div class="col-sm-4 col-form-label fw-semibold">Jenis Kelamin</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        @isset($bayi->jenis_kelamin)
                            {{ $bayi->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}
                        @else
                            .........................
                        @endisset
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-4 col-form-label fw-semibold">Berat Lahir</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ $bayi->berat_lahir ? number_format($bayi->berat_lahir, 0, ',', '.') . ' gram' : '.........................' }}
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-4 col-form-label fw-semibold">Panjang Badan</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ $bayi->panjang_badan ? $bayi->panjang_badan . ' cm' : '.........................' }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-form-label fw-semibold">Lingkar Kepala</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ $bayi->lingkar_kepala ? $bayi->lingkar_kepala . ' cm' : '.........................' }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Initial Treatment -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block">PENANGANAN AWAL</h5>
            <div class="row mb-2">
                <div class="col-sm-4 col-form-label fw-semibold">Inisiasi Menyusu Dini</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ $inisiasi_menyusu_dini ?? '.........................' }}
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-4 col-form-label fw-semibold">Vitamin K1</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ $vitamin_k1 ?? '.........................' }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-form-label fw-semibold">Salep Mata</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ $salep_mata ?? '.........................' }}
                    </div>
                </div>
            </div>
        </div>

        <div class="page-break"></div>

        <!-- Additional Notes -->
        <div class="border border-dark p-3 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block">CATATAN TAMBAHAN</h5>
            <div class="form-control-plaintext border border-dark rounded p-2" style="min-height: 100px">
                {{ $catatan ?? '...............................................................................................................' }}
            </div>
        </div>

        <!-- Signature Section - Print Side by Side -->
        <div class="d-flex justify-content-between mt-5" style="page-break-inside: avoid;">
            <!-- Parent Signature -->
            <div class="text-center" style="width: 45%;">
                <p class="mb-4">Orang Tua/Wali</p>
                <div class="border-top border-dark mt-4 mb-2 mx-auto" style="width: 200px;"></div>
                <p class="fw-bold mb-0">(.......................................)</p>
            </div>

            <!-- Health Worker Signature -->
            <div class="text-center" style="width: 45%;">
                <div class="mb-4">
                    <p class="mb-0">{{ $tempat ?? 'Kota Contoh' }}, {{ \Carbon\Carbon::now()->isoFormat('D MMMM Y') }}
                    </p>
                </div>
                <div>
                    <p class="mb-1">Petugas Kesehatan</p>
                    <div class="border-top border-dark mt-4 mb-2 mx-auto" style="width: 200px;"></div>
                    <p class="fw-bold mb-0">{{ $petugas ?? 'dr. Nama Petugas' }}</p>
                    <p class="small text-muted">NIP. {{ $nip_petugas ?? '.........................' }}</p>
                </div>
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
        }

        /* Signature section fixes */
        @media print {
            .signature-container {
                display: flex !important;
                flex-direction: row !important;
            }

            .parent-sign,
            .health-worker-sign {
                float: none !important;
                display: block !important;
            }

            /* Chrome specific fix */
            body {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
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
