@extends('layouts.print')

@section('title', 'Formulir Kunjungan Neonatal 0-7 Hari')

@section('content')
<div class="document-container border border-dark p-4">
    <!-- Header Section -->
    <div class="text-center mb-4">
        <h4 class="fw-bold mb-1">FORMULIR KUNJUNGAN NEONATAL</h4>
        <h5 class="fw-bold mb-0">0–7 HARI</h5>
        <div class="border-top border-dark mt-2 mx-auto" style="width: 250px;"></div>
    </div>

    <!-- Registration Number -->
    <div class="text-end mb-3">
        <div class="border border-dark p-1 d-inline-block">
            <small class="fw-bold">No. Registrasi: {{ $no_registrasi ?? '..............' }}</small>
        </div>
    </div>

    <!-- Baby Information -->
    <div class="mb-4">
        <h6 class="fw-bold border-bottom border-dark pb-1">INFORMASI BAYI</h6>
        <div class="data-row">
            <span class="data-label">Nama Bayi:</span>
            <span class="data-value">{{ $bayi->nama ?? '.........................' }}</span>
        </div>
        <div class="data-row">
            <span class="data-label">Tanggal Lahir:</span>
            <span class="data-value">{{ $bayi->tanggal_lahir ? \Carbon\Carbon::parse($bayi->tanggal_lahir)->isoFormat('D MMMM Y') : '.........................' }}</span>
        </div>
        <div class="data-row">
            <span class="data-label">Nama Ibu:</span>
            <span class="data-value">{{ $bayi->ibu->nama ?? '.........................' }}</span>
        </div>
        <div class="data-row">
            <span class="data-label">Alamat:</span>
            <span class="data-value">{{ $bayi->ibu->alamat ?? '.........................' }}</span>
        </div>
        <div class="data-row">
            <span class="data-label">Tanggal Kunjungan:</span>
            <span class="data-value">{{ \Carbon\Carbon::parse($kunjungan)->isoFormat('D MMMM Y') }}</span>
        </div>
    </div>

    <!-- Examination Results -->
    <div class="mb-4">
        <h6 class="fw-bold border-bottom border-dark pb-1">HASIL PEMERIKSAAN</h6>
        <div class="data-row">
            <span class="data-label">Berat Badan:</span>
            <span class="data-value">{{ $berat_badan ?? '........' }} kg</span>
        </div>
        <div class="data-row">
            <span class="data-label">Suhu Tubuh:</span>
            <span class="data-value">{{ $suhu ?? '........' }} °C</span>
        </div>
        <div class="data-row">
            <span class="data-label">Frekuensi Napas:</span>
            <span class="data-value">{{ $frekuensi_napas ?? '........' }} kali/menit</span>
        </div>
        <div class="data-row">
            <span class="data-label">Refleks Menghisap:</span>
            <span class="data-value">{{ $refleks_menghisap ?? '........' }}</span>
        </div>
        <div class="data-row">
            <span class="data-label">Ikterus:</span>
            <span class="data-value">{{ $ikterus ?? '........' }}</span>
        </div>
        <div class="data-row">
            <span class="data-label">Kondisi Tali Pusat:</span>
            <span class="data-value">{{ $tali_pusat ?? '........' }}</span>
        </div>
        <div class="data-row">
            <span class="data-label">Tindakan/Intervensi:</span>
            <span class="data-value">{{ $tindakan ?? '........' }}</span>
        </div>
    </div>

    <!-- Notes -->
    <div class="mb-4">
        <h6 class="fw-bold border-bottom border-dark pb-1">CATATAN & SARAN</h6>
        <div class="notes-box">
            {{ $catatan ?? '...............................................................................................................' }}
        </div>
    </div>

    <!-- Signatures -->
    <div class="signature-section">
        <div class="signature-parent">
            <div class="signature-line"></div>
            <p>Orang Tua/Wali</p>
            <p class="signature-name">(.......................................)</p>
        </div>
        
        <div class="signature-staff">
            <p>{{ $tempat ?? 'Kota Contoh' }}, {{ \Carbon\Carbon::parse($kunjungan)->isoFormat('D MMMM Y') }}</p>
            <div class="signature-line"></div>
            <p>Petugas Kesehatan</p>
            <p class="signature-name">{{ $petugas ?? 'dr. Nama Petugas' }}</p>
            <p class="signature-nip">NIP. {{ $nip_petugas ?? '.........................' }}</p>
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
        background-color: #fff;
        color: #000;
    }
    
    .document-container {
        max-width: 21cm;
        margin: 0 auto;
        padding: 2cm;
    }
    
    .data-row {
        display: flex;
        margin-bottom: 0.7rem;
    }
    
    .data-label {
        font-weight: 600;
        width: 35%;
        min-width: 120px;
    }
    
    .data-value {
        border-bottom: 1px solid #000;
        flex-grow: 1;
        padding-left: 0.5rem;
    }
    
    .notes-box {
        border: 1px solid #000;
        min-height: 100px;
        padding: 0.5rem;
        margin-top: 0.5rem;
    }
    
    .signature-section {
        display: flex;
        justify-content: space-between;
        margin-top: 3rem;
        page-break-inside: avoid;
    }
    
    .signature-parent, 
    .signature-staff {
        width: 45%;
        text-align: center;
    }
    
    .signature-line {
        border-top: 1px solid #000;
        width: 70%;
        margin: 3rem auto 0.5rem;
    }
    
    .signature-name {
        font-weight: bold;
        margin: 0.5rem 0;
    }
    
    .signature-nip {
        font-size: 0.9rem;
        color: #555;
    }
    
    @media print {
        body {
            padding: 0;
            margin: 0;
        }
        
        .document-container {
            border: none;
            padding: 0;
            margin: 0;
            max-width: 100%;
        }
    }
</style>
@endsection

@section('scripts')
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
@endsection