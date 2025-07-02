@extends('layouts.print')

@section('title', 'Pelayanan KB Pasca Persalinan')

@section('content')
    <div class="container-fluid px-4">
        <!-- Header Section -->
        <div class="text-center my-4">
            <h3 class="fw-bold mb-1"><u>PELAYANAN KELUARGA BERENCANA PASCA PERSALINAN</u></h3>
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
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Nama Suami</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ optional($ibu->keluarga->firstWhere('status', 'suami'))->nama ?? '.........................' }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-form-label fw-semibold">Tanggal Persalinan</div>
                <div class="col-sm-3">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ optional($nifas)->tanggal_persalinan ? \Carbon\Carbon::parse($nifas->tanggal_persalinan)->isoFormat('D MMMM Y') : '.........................' }}
                    </div>
                </div>
                <div class="col-sm-2 col-form-label fw-semibold">Usia Bayi</div>
                <div class="col-sm-4">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ optional($bayi->tanggal_lahir) ? now()->diffInDays($bayi->tanggal_lahir).' Hari' : '......' }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Pilihan Kontrasepsi -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block text-center">PILIHAN KONTRASEPSI</h5>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Jenis KB</div>
                <div class="col-sm-3">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ optional($nifas)->jenis_kb ?? '.........................' }}
                    </div>
                </div>
                <div class="col-sm-3 col-form-label fw-semibold">Tanggal Mulai</div>
                <div class="col-sm-3">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ optional($nifas)->tanggal_mulai_kb ? \Carbon\Carbon::parse($nifas->tanggal_mulai_kb)->isoFormat('D MMMM Y') : '.........................' }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-form-label fw-semibold">Tempat Pelayanan</div>
                <div class="col-sm-3">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ optional($nifas)->tempat_kb ?? '.........................' }}
                    </div>
                </div>
                <div class="col-sm-3 col-form-label fw-semibold">Petugas</div>
                <div class="col-sm-3">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ optional($nifas)->petugas_kb ?? '.........................' }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Pemeriksaan Pra KB -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block text-center">PEMERIKSAAN PRA KB</h5>
            <div class="row">
                <div class="col-md-3">
                    <div class="row mb-2">
                        <div class="col-sm-6 col-form-label fw-semibold">Tekanan Darah</div>
                        <div class="col-sm-6">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                {{ optional($nifas)->tekanan_darah ?? '......' }} mmHg
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row mb-2">
                        <div class="col-sm-6 col-form-label fw-semibold">Nadi</div>
                        <div class="col-sm-6">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                {{ optional($nifas)->nadi ?? '......' }} /menit
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row mb-2">
                        <div class="col-sm-6 col-form-label fw-semibold">Kondisi Rahim</div>
                        <div class="col-sm-6">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                {{ optional($nifas)->kondisi_rahim ?? '.........................' }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row mb-2">
                        <div class="col-sm-6 col-form-label fw-semibold">Laktasi</div>
                        <div class="col-sm-6">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                {{ optional($nifas)->laktasi ?? '.........................' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Konseling KB -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block text-center">KONSELING KB</h5>
            <div class="row mb-3">
                <div class="col-sm-3 col-form-label fw-semibold">Tanggal Konseling</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ optional($nifas)->tanggal_konseling_kb ? \Carbon\Carbon::parse($nifas->tanggal_konseling_kb)->isoFormat('D MMMM Y') : '.........................' }}
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 col-form-label fw-semibold">Materi Konseling</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ optional($nifas)->materi_konseling_kb ?? '...............................................................................................................' }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-form-label fw-semibold">Kesimpulan</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ optional($nifas)->kesimpulan_konseling_kb ?? '...............................................................................................................' }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Rencana Tindak Lanjut -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block text-center">RENCANA TINDAK LANJUT</h5>
            <div class="row mb-3">
                <div class="col-sm-3 col-form-label fw-semibold">Tanggal Kontrol</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ optional($nifas)->tanggal_kontrol_kb ? \Carbon\Carbon::parse($nifas->tanggal_kontrol_kb)->isoFormat('D MMMM Y') : '.........................' }}
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 col-form-label fw-semibold">Efek Samping</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ optional($nifas)->efek_samping_kb ?? '...............................................................................................................' }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-form-label fw-semibold">Keterangan</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ optional($nifas)->keterangan_kb ?? '...............................................................................................................' }}
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
                <p style="margin-bottom: 1.5rem; font-size: 12pt;">Petugas KB/KIA</p>
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

        .form-control-plaintext {
            min-height: 1.5em;
        }

        .border-dark {
            border-color: #000 !important;
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