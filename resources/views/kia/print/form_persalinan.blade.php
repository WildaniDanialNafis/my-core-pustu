{{-- @extends('layouts.print')

@section('title', 'Catatan Persalinan')

@section('content')
    <div class="container-fluid px-4">
        <!-- Header Section -->
        <div class="text-center my-4">
            <h3 class="fw-bold mb-1"><u>CATATAN PERSALINAN</u></h3>
            <div class="border-top border-dark mt-2 mx-auto" style="width: 200px;"></div>
            <p class="mb-0 mt-2">Tanggal: {{ \Carbon\Carbon::parse($tanggal)->isoFormat('D MMMM Y') }}</p>
        </div>

        <!-- Data Ibu -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block">DATA IBU</h5>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Nama Ibu</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">{{ $ibu->nama ?? '.........................' }}</div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Umur</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ $ibu->tgl_lahir ? now()->diffInYears($ibu->tgl_lahir) . ' Tahun' : '.........................' }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-form-label fw-semibold">Tanggal</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ \Carbon\Carbon::parse($tanggal)->isoFormat('D MMMM Y') }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Data Persalinan -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block">DATA PERSALINAN</h5>
            <div class="row mb-2">
                <div class="col-sm-4 col-form-label fw-semibold">Jam Mulai</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ $persalinan->jam_mulai ?? '.........................' }}
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-4 col-form-label fw-semibold">Jam Lahir</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ $persalinan->jam_lahir ?? '.........................' }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-form-label fw-semibold">Cara Persalinan</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ $persalinan->cara_persalinan ?? '.........................' }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Data Bayi -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block">DATA BAYI</h5>
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
            <div class="row">
                <div class="col-sm-4 col-form-label fw-semibold">Berat Lahir</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ $bayi->berat_lahir ? number_format($bayi->berat_lahir, 0, ',', '.') . ' gram' : '.........................' }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Tanda Tangan - Fixed Side by Side Layout -->
        <div class="signature-container"
            style="display: flex !important; justify-content: space-between !important; align-items: flex-end; margin-top: 3rem; page-break-inside: avoid;">
            <!-- Petugas Penolong -->
            <div class="text-center" style="width: 48%;">
                <p style="margin-bottom: 1.5rem; font-size: 12pt;">Petugas Penolong</p>
                <div style="border-top: 1px solid #000; width: 200px; margin: 0 auto 0.5rem;"></div>
                <p style="font-weight: bold; margin-bottom: 0; font-size: 12pt;">(.......................................)</p>
            </div>

            <!-- Dokter/Bidan -->
            <div class="text-center" style="width: 48%;">
                <p style="margin-bottom: 0.5rem; font-size: 12pt;">{{ $tempat ?? 'Kota Contoh' }}, {{ \Carbon\Carbon::parse($tanggal)->isoFormat('D MMMM Y') }}</p>
                <p style="margin-bottom: 1.5rem; font-size: 12pt;">Dokter/Bidan</p>
                <div style="border-top: 1px solid #000; width: 200px; margin: 0 auto 0.5rem;"></div>
                <p style="font-weight: bold; margin-bottom: 0; font-size: 12pt;">{{ $petugas ?? 'dr. Nama Petugas' }}</p>
                <p style="font-size: 11pt; color: #6c757d; margin-bottom: 0;">NIP. {{ $nip_petugas ?? '.........................' }}</p>
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

@section('title', 'Catatan Persalinan')

@section('content')
    <div class="container-fluid px-4">
        <!-- Header Section -->
        <div class="text-center my-4">
            <h3 class="fw-bold mb-1" style="text-decoration: underline;">CATATAN PERSALINAN</h3>
            <p class="mb-0 mt-2">Tanggal: 15 Juli 2023</p>
        </div>

        <!-- Data Ibu -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block">DATA IBU</h5>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Nama Ibu</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">Siti Rahayu</div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Umur</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        28 Tahun
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-form-label fw-semibold">Tanggal</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        15 Juli 2023
                    </div>
                </div>
            </div>
        </div>

        <!-- Data Persalinan -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block">DATA PERSALINAN</h5>
            <div class="row mb-2">
                <div class="col-sm-4 col-form-label fw-semibold">Jam Mulai</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        08:30 WIB
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-4 col-form-label fw-semibold">Jam Lahir</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        12:45 WIB
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-4 col-form-label fw-semibold">Cara Persalinan</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        Normal Spontan
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-4 col-form-label fw-semibold">Penolong Persalinan</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        Bidan Sri Lestari
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-form-label fw-semibold">Kondisi Ibu</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        Baik, tidak ada komplikasi
                    </div>
                </div>
            </div>
        </div>

        <!-- Data Bayi -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block">DATA BAYI</h5>
            <div class="row mb-2">
                <div class="col-sm-4 col-form-label fw-semibold">Nama Bayi</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        Muhammad Fajar
                    </div>
                </div>
            </div>
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
            <div class="row">
                <div class="col-sm-4 col-form-label fw-semibold">Kondisi Bayi</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        Sehat, APGAR Score 9/10
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Information -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block">INFORMASI TAMBAHAN</h5>
            <div class="row mb-2">
                <div class="col-sm-4 col-form-label fw-semibold">Lama Persalinan</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        4 jam 15 menit
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-4 col-form-label fw-semibold">Pendarahan</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        Normal (±200cc)
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-form-label fw-semibold">Tindakan</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        Episiotomi, Jahit perineum derajat II
                    </div>
                </div>
            </div>
        </div>

        <!-- Tanda Tangan Section -->
        <div class="row mt-5" style="page-break-inside: avoid;">
            <!-- Petugas Column -->
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
                        <p class="mb-1" style="font-size: 12pt;">Petugas Penolong</p>
                        <p class="fw-bold mb-0" style="font-size: 12pt;">(Bidan Sri Lestari)</p>
                        <p class="text-muted mb-0" style="font-size: 11pt;">NIP. 198507102010122001</p>
                    </div>
                </div>
            </div>

            <!-- Penerima Column -->
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
                        <p class="mb-1" style="font-size: 12pt;">Dokter/Bidan</p>
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
