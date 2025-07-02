<!DOCTYPE html>
<html>
<head>
    <title>Pencatatan Imunisasi Bayi</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 11pt; line-height: 1.5; }
        .header { text-align: center; margin-bottom: 15px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 15px; }
        td, th { padding: 8px; border: 1px solid #000; vertical-align: top; }
        .no-border td, .no-border th { border: none; }
        .section { margin-bottom: 20px; }
        .text-center { text-align: center; }
        .bg-light { background-color: #f8f9fa; }
        .nowrap { white-space: nowrap; }
        @media print {
            .no-print { display: none; }
            body { padding: 10px; margin: 0; }
        }
    </style>
</head>
<body>
    <div class="header">
        <h3>PENCATATAN IMUNISASI BAYI/ANAK</h3>
    </div>

    <table class="no-border">
        <tr>
            <td width="20%">Nama Bayi</td>
            <td width="30%">: {{ $bayi->nama ?? '-' }}</td>
            <td width="20%">Jenis Kelamin</td>
            <td width="30%">: {{ $bayi->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>: {{ optional($bayi->tanggal_lahir)->translatedFormat('d F Y') ?? '-' }}</td>
            <td>Usia</td>
            <td>: {{ $bayi->tanggal_lahir ? now()->diffInMonths($bayi->tanggal_lahir).' Bulan' : '-' }}</td>
        </tr>
        <tr>
            <td>Berat Lahir</td>
            <td>: {{ $berat_badan ?? '-' }} gram</td>
            <td>Panjang Badan</td>
            <td>: {{ $panjang_badan ?? '-' }} cm</td>
        </tr>
        <tr>
            <td>Lingkar Badan</td>
            <td>: {{ $lingkar_badan ?? '-' }} cm</td>
            <td>Kondisi Lahir</td>
            <td>: {{ $kondisi_bayi ?? '-' }}</td>
        </tr>
        <tr>
            <td>Nama Ibu</td>
            <td>: {{ $bayi->ibu->nama ?? '-' }}</td>
            <td>Nama Ayah</td>
            <td>: {{ $suami }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td colspan="3">: {{ $bayi->ibu->alamat ?? '-' }}</td>
        </tr>
    </table>

    <div class="section">
        <h4 class="text-center bg-light">RIWAYAT IMUNISASI</h4>
        <table>
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="25%">Jenis Imunisasi</th>
                    <th width="20%">Tanggal</th>
                    <th width="15%">Usia Bayi</th>
                    <th width="20%">Tempat</th>
                    <th width="15%">Petugas</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jenis_imunisasi as $jenis)
                @php
                    $data = $imunisasi->firstWhere('jenis_imunisasi', $jenis);
                @endphp
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $jenis }}</td>
                    <td class="nowrap">{{ optional($data)->tanggal_imunisasi ? \Carbon\Carbon::parse($data->tanggal_imunisasi)->translatedFormat('d/m/Y') : '-' }}</td>
                    <td class="text-center">
                        @if($data && $bayi->tanggal_lahir)
                            {{ \Carbon\Carbon::parse($data->tanggal_imunisasi)->diffInDays($bayi->tanggal_lahir) }} Hari
                        @else
                            -
                        @endif
                    </td>
                    <td>{{ optional($data)->tempat_imunisasi ?? '-' }}</td>
                    <td>{{ optional($data)->petugas ?? '-' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="section">
        <h4 class="text-center bg-light">CATATAN KHUSUS</h4>
        <table>
            <tr>
                <td width="20%">Riwayat Alergi</td>
                <td width="80%">.....................................................................</td>
            </tr>
            <tr>
                <td>Reaksi Imunisasi</td>
                <td>.....................................................................</td>
            </tr>
            <tr>
                <td>Keterangan Tambahan</td>
                <td>{{ $bayi->keterangan_tambahan ?? '.....................................................................' }}</td>
            </tr>
        </table>
    </div>

    <div style="margin-top: 30px; text-align: right;">
        <p>{{ $bayi->ibu->kabupaten ?? '-' }}, {{ $tanggal }}</p>
        <p style="margin-top: 50px;">(........................................)</p>
        <p>Petugas Imunisasi</p>
    </div>

    <button class="no-print" onclick="window.print()">Cetak</button>
    <script>window.print();</script>
</body>
</html>