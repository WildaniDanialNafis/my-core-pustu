{{-- @extends('layouts.print')

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

@extends('layouts.print')

@section('title', 'Formulir Bayi Baru Lahir')

@section('content')
    <div class="container-fluid px-4">
        <!-- Header Section -->
        <div class="text-center my-4">
            <h3 class="fw-bold mb-1" style="text-decoration: underline;">FORMULIR BAYI BARU LAHIR</h3>
            <p class="mb-0 mt-2">Tanggal: 15 Juli 2023</p>
        </div>

        <!-- General Information -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block">DATA UMUM</h5>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Nama Bayi</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        Muhammad Fajar
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Tanggal Lahir</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        15 Juli 2023
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Waktu Lahir</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        12:45 WIB
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-form-label fw-semibold">Nama Ibu</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        Siti Rahayu
                    </div>
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
                        Laki-laki
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-4 col-form-label fw-semibold">Berat Lahir</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        3.200 gram
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-4 col-form-label fw-semibold">Panjang Badan</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        48 cm
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-4 col-form-label fw-semibold">Lingkar Kepala</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        34 cm
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-form-label fw-semibold">APGAR Score</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        9/10
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
                        Dilakukan, 30 menit pertama
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-4 col-form-label fw-semibold">Vitamin K1</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        Diberikan, 1 mg IM
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-4 col-form-label fw-semibold">Salep Mata</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        Eritromisin 0.5%
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-4 col-form-label fw-semibold">Imunisasi HB0</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        Diberikan, 0.5 ml
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-form-label fw-semibold">Pemeriksaan Bayi</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        Normal, tidak ditemukan kelainan
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Notes -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block">CATATAN TAMBAHAN</h5>
            <div class="form-control-plaintext mt-2">
                Bayi dalam kondisi sehat. Ibu telah diberikan edukasi tentang perawatan bayi baru lahir termasuk
                teknik menyusui yang benar, perawatan tali pusat, dan tanda-tanda bahaya pada bayi baru lahir
                yang harus diwaspadai. Kontrol ulang dijadwalkan 3 hari setelah persalinan.
            </div>
        </div>

        <!-- Tanda Tangan Section -->
        <div class="row mt-5" style="page-break-inside: avoid;">
            <!-- Orang Tua Column -->
            <div class="col-6">
                <div class="d-flex flex-column align-items-center justify-content-end" style="height: 180px;">
                    <div class="signature-placeholder mb-3" style="width: 200px; height: 80px; position: relative;">
                        @if (file_exists(public_path('signature.png')))
                            <img src="{{ asset('signature.png') }}" alt="Tanda Tangan Petugas"
                                style="max-height: 100%; max-width: 100%; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);">
                        @else
                            <div style="border-bottom: 1px dashed #000; width: 100%; position: absolute; bottom: 0;"></div>
                        @endif
                    </div>
                    <div class="text-center">
                        <p class="mb-1" style="font-size: 12pt;">Orang Tua/Wali</p>
                        <p class="fw-bold mb-0" style="font-size: 12pt;">(Ahmad Dhani)</p>
                    </div>
                </div>
            </div>

            <!-- Petugas Column -->
            <div class="col-6">
                <div class="d-flex flex-column align-items-center justify-content-end" style="height: 180px;">
                    <p class="mb-3" style="font-size: 12pt;">Madiun, 15 Juli 2023</p>
                    <div class="signature-placeholder mb-3" style="width: 200px; height: 80px; position: relative;">
                        @if (file_exists(public_path('signature-1.png')))
                            <img src="{{ asset('signature-1.png') }}" alt="Tanda Tangan Penerima"
                                style="max-height: 100%; max-width: 100%; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);">
                        @else
                            <div style="border-bottom: 1px dashed #000; width: 100%; position: absolute; bottom: 0;"></div>
                        @endif
                    </div>
                    <div class="text-center">
                        <p class="mb-1" style="font-size: 12pt;">Petugas Kesehatan</p>
                        <p class="fw-bold mb-0" style="font-size: 12pt;">dr. Rina Wulandari</p>
                        <p class="text-muted mb-0" style="font-size: 11pt;">NIP. 198012312003122001</p>
                    </div>
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
            line-height: 1.5;
        }

        .border-dark {
            border-color: #000 !important;
        }

        .rounded {
            border-radius: 0.25rem !important;
        }

        .signature-placeholder {
            border-bottom: 1px dashed #000;
        }

        @media print {
            body {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
                padding: 0;
                margin: 0;
            }

            .container-fluid {
                padding: 0 15px;
            }

            .row {
                page-break-inside: avoid;
                break-inside: avoid;
                display: flex !important;
            }

            .col-6 {
                width: 50%;
                float: none;
                display: flex;
                flex-direction: column;
            }
        }
    </style>
@endsection
