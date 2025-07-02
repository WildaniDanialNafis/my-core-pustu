@extends('layouts.print')

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