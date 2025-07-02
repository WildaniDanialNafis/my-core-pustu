@extends('layouts.print')

@section('title', 'Pemantauan Nifas 6 Jam Pertama')

@section('header')
    <div class="kop text-center">
        <h1 class="h5 mb-1">PEMERINTAH KABUPATEN CONTOH</h1>
        <h2 class="h6 mb-1">DINAS KESEHATAN DUMMY</h2>
        <h2 class="h6 mb-1">{{ $nama_puskesmas ?? 'NAMA PUSKESMAS' }}</h2>
        <p><em>{{ $alamat_puskesmas ?? 'ALAMAT PUSKESMAS' }}</em></p>
        <hr>
    </div>
@endsection

@section('content')
    <div class="container-fluid px-4">
        <!-- Header Section -->
        <div class="text-center my-4">
            <h3 class="fw-bold mb-1"><u>PEMANTAUAN NIFAS</u></h3>
            <h4 class="fw-bold mb-0">6 JAM PERTAMA</h4>
            <div class="border-top border-dark mt-2 mx-auto" style="width: 250px;"></div>
        </div>

        <!-- Data Ibu -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block">DATA IBU</h5>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Nama Ibu</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        {{ $ibu->nama ?? '.........................' }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-form-label fw-semibold">Tanggal Persalinan</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        @php
                            $tglPersalinan = $nifas->tanggal_persalinan ?? ($tanggal ?? null);
                        @endphp

                        {{ $tglPersalinan ? \Carbon\Carbon::parse($tglPersalinan)->isoFormat('D MMMM Y') : '.........................' }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Hasil Pemantauan -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block">HASIL PEMANTAUAN</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center fw-semibold" style="width: 30%">Parameter</th>
                        <th class="text-center fw-semibold" style="width: 23%">0-2 Jam</th>
                        <th class="text-center fw-semibold" style="width: 23%">2-4 Jam</th>
                        <th class="text-center fw-semibold" style="width: 23%">4-6 Jam</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Perdarahan</td>
                        <td>{{ $perdarahan_0_2 ?? '.........' }}</td>
                        <td>{{ $perdarahan_2_4 ?? '.........' }}</td>
                        <td>{{ $perdarahan_4_6 ?? '.........' }}</td>
                    </tr>
                    <tr>
                        <td>Kontraksi Uterus</td>
                        <td>{{ $kontraksi_0_2 ?? '.........' }}</td>
                        <td>{{ $kontraksi_2_4 ?? '.........' }}</td>
                        <td>{{ $kontraksi_4_6 ?? '.........' }}</td>
                    </tr>
                    <tr>
                        <td>Tekanan Darah</td>
                        <td>{{ $td_0_2 ?? '.........' }}</td>
                        <td>{{ $td_2_4 ?? '.........' }}</td>
                        <td>{{ $td_4_6 ?? '.........' }}</td>
                    </tr>
                    <tr>
                        <td>Nadi</td>
                        <td>{{ $nadi_0_2 ?? '.........' }}</td>
                        <td>{{ $nadi_2_4 ?? '.........' }}</td>
                        <td>{{ $nadi_4_6 ?? '.........' }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Masalah yang Ditemukan -->
        <div class="border border-dark p-3 mb-4 rounded" style="min-height: 100px;">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block">MASALAH YANG DITEMUKAN</h5>
            <div class="form-control-plaintext mt-2">
                {{ $masalah ?? '...............................................................................................................' }}
            </div>
        </div>

        <!-- Tanda Tangan - Fixed Side by Side Layout -->
        <div class="signature-container"
            style="display: flex !important; justify-content: space-between !important; align-items: flex-end; margin-top: 3rem; page-break-inside: avoid;">
            <!-- Petugas -->
            <div class="text-center" style="width: 48%;">
                <p style="margin-bottom: 1.5rem; font-size: 12pt;">Petugas Kesehatan</p>
                <div style="border-top: 1px solid #000; width: 200px; margin: 0 auto 0.5rem;"></div>
                <p style="font-weight: bold; margin-bottom: 0; font-size: 12pt;">
                    (.......................................)</p>
            </div>

            <!-- Tanggal -->
            <div class="text-center" style="width: 48%;">
                <p style="margin-bottom: 0.5rem; font-size: 12pt;">{{ $tempat ?? 'Kota Contoh' }},
                    {{ \Carbon\Carbon::now()->isoFormat('D MMMM Y') }}</p>
                <p style="margin-bottom: 1.5rem; font-size: 12pt;">Dokter/Bidan</p>
                <div style="border-top: 1px solid #000; width: 200px; margin: 0 auto 0.5rem;"></div>
                <p style="font-weight: bold; margin-bottom: 0; font-size: 12pt;">{{ $petugas ?? 'dr. Nama Petugas' }}
                </p>
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
        }

        .kop {
            font-family: Arial, sans-serif;
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

        .form-control-plaintext {
            min-height: 1.5em;
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
