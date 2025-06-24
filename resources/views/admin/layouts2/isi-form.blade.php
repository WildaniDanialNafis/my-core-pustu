@extends('admin.layouts2.form')

@section('title', 'LAPORAN KUNJUNGAN PASIEN')
@section('subtitle', 'Bulan Januari 2023')

@section('report-info')
    <div class="report-info-item"><strong>Periode:</strong> 1 - 31 Januari 2023</div>
    <div class="report-info-item"><strong>Lokasi PUSTU:</strong> Desa Sukamaju</div>
    <div class="report-info-item"><strong>Penanggung Jawab:</strong> dr. Ani Wijaya</div>
@endsection

@section('content')
    @php
        $kunjungan = [
            ['tanggal' => '01-01-2023', 'umum' => 5, 'kia' => 2, 'lansia' => 1],
            ['tanggal' => '03-01-2023', 'umum' => 7, 'kia' => 3, 'lansia' => 2],
            ['tanggal' => '05-01-2023', 'umum' => 4, 'kia' => 1, 'lansia' => 3],
            ['tanggal' => '07-01-2023', 'umum' => 6, 'kia' => 4, 'lansia' => 1],
        ];

        foreach ($kunjungan as &$row) {
            $row['total'] = $row['umum'] + $row['kia'] + $row['lansia'];
        }

        $total = [
            'umum' => array_sum(array_column($kunjungan, 'umum')),
            'kia' => array_sum(array_column($kunjungan, 'kia')),
            'lansia' => array_sum(array_column($kunjungan, 'lansia')),
            'semua' => array_sum(array_column($kunjungan, 'total')),
        ];
    @endphp

    <h3 style="text-align: center; margin-bottom: 15px;">DATA KUNJUNGAN PASIEN</h3>

    <table class="report-table">
        <thead>
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Tanggal</th>
                <th colspan="3">Jenis Kunjungan</th>
                <th rowspan="2">Total</th>
            </tr>
            <tr>
                <th>Umum</th>
                <th>KIA</th>
                <th>Lansia</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kunjungan as $index => $data)
            <tr>
                <td class="text-center">{{ $index + 1 }}</td>
                <td>{{ $data['tanggal'] }}</td>
                <td class="text-center">{{ $data['umum'] }}</td>
                <td class="text-center">{{ $data['kia'] }}</td>
                <td class="text-center">{{ $data['lansia'] }}</td>
                <td class="text-center">{{ $data['total'] }}</td>
            </tr>
            @endforeach
            <tr class="text-bold">
                <td colspan="2">TOTAL</td>
                <td class="text-center">{{ $total['umum'] }}</td>
                <td class="text-center">{{ $total['kia'] }}</td>
                <td class="text-center">{{ $total['lansia'] }}</td>
                <td class="text-center">{{ $total['semua'] }}</td>
            </tr>
        </tbody>
    </table>

    <div style="margin-top: 20px;">
        <h4>Catatan:</h4>
        <p>1. Kunjungan umum termasuk penyakit umum dan imunisasi dasar</p>
        <p>2. Kunjungan KIA meliputi antenatal care dan postnatal care</p>
        <p>3. Kunjungan lansia untuk pemeriksaan kesehatan rutin usia >60 tahun</p>
    </div>
@endsection
