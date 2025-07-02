@extends('layouts.print')

@section('title', 'Pemantauan ANC Trimester 1')

@section('content')
    <div class="container-fluid px-4">
        <!-- Header Section -->
        <div class="text-center my-4">
            <h3 class="fw-bold mb-1"><u>PEMANTAUAN ANC TRIMESTER 1 (0-12 MINGGU)</u></h3>
            <div class="border-top border-dark mt-2 mx-auto" style="width: 250px;"></div>
            <p class="fw-semibold">No. Registrasi: {{ $ibu->no_reg_kohort_ibu ?? '.........................' }}</p>
        </div>

        <!-- Data Ibu -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block">DATA IBU</h5>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Nama Ibu</div>
                <div class="col-sm-3">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ $ibu->nama ?? '.........................' }}
                    </div>
                </div>
                <div class="col-sm-2 col-form-label fw-semibold">Umur</div>
                <div class="col-sm-4">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ now()->diffInYears($ibu->tgl_lahir) ?? '......' }} Tahun
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Alamat</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ $ibu->alamat ?? '.........................' }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-form-label fw-semibold">HPHT</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ optional($pemeriksaan)->hpht ? \Carbon\Carbon::parse($pemeriksaan->hpht)->isoFormat('D MMMM Y') : '.........................' }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Pemeriksaan Fisik -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block text-center">PEMERIKSAAN FISIK</h5>
            <div class="row">
                <div class="col-md-3">
                    <div class="row mb-2">
                        <div class="col-sm-6 col-form-label fw-semibold">Berat Badan</div>
                        <div class="col-sm-6">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                {{ optional($fisik)->berat_badan ?? '......' }} kg
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row mb-2">
                        <div class="col-sm-6 col-form-label fw-semibold">Tinggi Badan</div>
                        <div class="col-sm-6">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                {{ optional($fisik)->tinggi_badan ?? '......' }} cm
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row mb-2">
                        <div class="col-sm-6 col-form-label fw-semibold">Lingkar Lengan</div>
                        <div class="col-sm-6">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                {{ optional($fisik)->lingkar_lengan ?? '......' }} cm
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row mb-2">
                        <div class="col-sm-6 col-form-label fw-semibold">Tekanan Darah</div>
                        <div class="col-sm-6">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                {{ optional($fisik)->tekanan_darah ?? '......' }} mmHg
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="row mb-2">
                        <div class="col-sm-6 col-form-label fw-semibold">Denyut Nadi</div>
                        <div class="col-sm-6">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                {{ optional($fisik)->denyut_nadi ?? '......' }} /menit
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row mb-2">
                        <div class="col-sm-6 col-form-label fw-semibold">Lingkar Perut</div>
                        <div class="col-sm-6">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                {{ optional($fisik)->lingkar_perut ?? '......' }} cm
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pemeriksaan USG -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block text-center">PEMERIKSAAN USG</h5>
            <div class="row">
                <div class="col-md-4">
                    <div class="row mb-2">
                        <div class="col-sm-5 col-form-label fw-semibold">Tanggal USG</div>
                        <div class="col-sm-7">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                {{ optional($usg)->tanggal ? \Carbon\Carbon::parse($usg->tanggal)->isoFormat('D MMMM Y') : '.........................' }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row mb-2">
                        <div class="col-sm-5 col-form-label fw-semibold">Usia Kehamilan</div>
                        <div class="col-sm-7">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                {{ optional($usg)->usia_kehamilan ?? '......' }} minggu
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row mb-2">
                        <div class="col-sm-5 col-form-label fw-semibold">Denyut Jantung Janin</div>
                        <div class="col-sm-7">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                {{ optional($usg)->denyut_jantung_janin ?? '......' }} /menit
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="row mb-2">
                        <div class="col-sm-5 col-form-label fw-semibold">Plasenta</div>
                        <div class="col-sm-7">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                {{ optional($usg)->plasenta ?? '.........................' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pemeriksaan Laboratorium -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block text-center">PEMERIKSAAN LABORATORIUM</h5>
            <div class="row">
                <div class="col-md-3">
                    <div class="row mb-2">
                        <div class="col-sm-5 col-form-label fw-semibold">Hb</div>
                        <div class="col-sm-7">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                {{ optional($lab)->hb ?? '......' }} g/dL
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row mb-2">
                        <div class="col-sm-5 col-form-label fw-semibold">Protein Urin</div>
                        <div class="col-sm-7">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                {{ optional($lab)->protein_urin ?? '.........................' }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row mb-2">
                        <div class="col-sm-5 col-form-label fw-semibold">Gula Darah</div>
                        <div class="col-sm-7">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                {{ optional($lab)->gula_darah ?? '......' }} mg/dL
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row mb-2">
                        <div class="col-sm-5 col-form-label fw-semibold">HBsAg</div>
                        <div class="col-sm-7">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                {{ optional($lab)->hbsag ?? '.........................' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Evaluasi dan Rekomendasi -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block text-center">EVALUASI DAN REKOMENDASI</h5>
            <div class="row mb-3">
                <div class="col-sm-3 col-form-label fw-semibold">Evaluasi Kehamilan</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ optional($evaluasi)->evaluasi ?? '...............................................................................................................' }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-form-label fw-semibold">Rekomendasi</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ optional($pemeriksaan)->rekomendasi ?? '...............................................................................................................' }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Tanda Tangan -->
        <div class="signature-container"
            style="display: flex !important; justify-content: space-between !important; align-items: flex-end; margin-top: 3rem; page-break-inside: avoid;">
            <!-- Tanggal -->
            <div class="text-center" style="width: 48%;">
                <p style="margin-bottom: 0.5rem; font-size: 12pt;">{{ $ibu->kabupaten ?? 'Kota Contoh' }}, 
                    {{ \Carbon\Carbon::parse($tanggal)->isoFormat('D MMMM Y') ?? \Carbon\Carbon::now()->isoFormat('D MMMM Y') }}</p>
            </div>
    
            <!-- Petugas -->
            <div class="text-center" style="width: 48%;">
                <p style="margin-bottom: 1.5rem; font-size: 12pt;">Petugas KIA</p>
                <div style="border-top: 1px solid #000; width: 200px; margin: 0 auto 0.5rem;"></div>
                <p style="font-weight: bold; margin-bottom: 0; font-size: 12pt;">{{ $petugas ?? 'Nama Petugas' }}</p>
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
            line-height: 1.5;
        }

        .kop {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #000;
        }

        th, td {
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

        .form-control-plaintext {
            min-height: 1.5em;
        }

        .border-dark {
            border-color: #000 !important;
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