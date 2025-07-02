<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\BayiLahir;
use App\Models\Ibu;
use App\Models\KesehatanNifas;
use App\Models\PemeriksaanTrimester1;
use App\Models\PemeriksaanTrimester3;
use App\Models\RujukanAnak;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class RujukanKiaController extends Controller
{
    public function generate($id_ibu)
    {
        try {
            // Eager load semua relasi yang dibutuhkan
            $ibu = Ibu::with([
                'keluarga',
                'pemeriksaanTrimester3.pemeriksaanLaboratoriumTri3',
                'pemeriksaanTrimester3.pemeriksaanFisikTri3',
                'pemeriksaanTrimester3.usgTri3',
                'kesehatanBersalin',
                'user',
                'evaluasiKehamilan'
            ])->findOrFail($id_ibu);

            // Ambil data terbaru dari relasi hasMany
            $tri3 = $ibu->pemeriksaanTrimester3->first() ?? null;
            $labTri3 = $tri3->pemeriksaanLaboratoriumTri3->first() ?? null;
            $fisikTri3 = $tri3->pemeriksaanFisikTri3->first() ?? null;
            $usgTri3 = $tri3->usgTri3->first() ?? null;
            $bersalin = $ibu->kesehatanBersalin->first();

            // Format data untuk dikirim ke view
            $data = [
                // Data Institusi
                'nama_puskesmas' => 'UPTD PUSKESMAS SAMPEL',
                'alamat_puskesmas' => 'Jl. Contoh No. 123, Kelurahan Dummy',

                // Data Pasien
                'no_rm' => $ibu->no_reg_kohort_ibu ?? $ibu->id_ibu,
                'nama' => $ibu->nama,
                'umur' => Carbon::parse($ibu->tgl_lahir)->age,
                'alamat' => $ibu->alamat,
                'gol_darah' => $ibu->gol_darah ?? '',
                'nama_suami' => optional($ibu->keluarga->firstWhere('status', 'suami'))->nama ?? '',

                // Data Medis
                'diagnosa' => $this->getDiagnosa($ibu, $labTri3),
                'keadaan_umum' => optional($fisikTri3)->keadaan_umum ?? '',
                'kesadaran' => optional($fisikTri3)->kesadaran ?? '',
                'td' => optional($tri3)->tekanan_darah ?? '',
                'nadi' => optional($tri3)->nadi ?? '',
                'rr' => optional($tri3)->respirasi ?? '',
                'suhu' => optional($tri3)->suhu ?? '',
                'pemeriksaan_kebidanan' => $this->getPemeriksaanKebidanan($usgTri3),
                'terapi' => $bersalin?->terapi ?? [],
                'alasan_rujukan' => $bersalin?->alasan_rujukan ?? '',

                // Data Petugas
                'bidan' => optional($ibu->user)->name ?? '',
                'nip_bidan' => optional($ibu->user)->nip ?? '',
                'dokter' => config('rujukan.nama_dokter', 'dr. Dokter Contoh'),

                // Metadata
                'tanggal' => Carbon::now()->translatedFormat('d F Y'),
                'no_rujukan' => 'RUJ-KIA/' . Carbon::now()->format('dmY') . '/' . Str::padLeft(rand(1, 999), 3, '0'),
            ];

            return view('surat.rujukan_kia', $data);

        } catch (\Exception $e) {
            Log::error('Gagal generate surat rujukan: ' . $e->getMessage());
            return back()->with('error', 'Gagal membuat surat rujukan: ' . $e->getMessage());
        }
    }

    private function getDiagnosa($ibu, $labTri3)
    {
        $diagnosa = optional($ibu->evaluasiKehamilan->last())->diagnosa ?? '';

        if ($labTri3 && $labTri3->hemoglobin && $labTri3->hemoglobin < 11) {
            $diagnosa .= ($diagnosa ? ', ' : '') . 'Anemia';
        }

        return $diagnosa;
    }

    private function getPemeriksaanKebidanan($usgTri3)
    {
        return [
            'fundus' => '', // tidak diberikan dummy
            'tfu' => optional($usgTri3)->tfu ?? '',
            'letak' => optional($usgTri3)->letak_janin ?? '',
            'djj' => optional($usgTri3)->djj ?? '',
        ];
    }

    public function rujukanIbuHamil($id_ibu)
    {
        $ibu = Ibu::with(['pemeriksaanTrimester3', 'user', 'keluarga'])->findOrFail($id_ibu);
        
        return view('kia.print.rujukan_ibu_hamil', [
            'no_rujukan' => 'RIH-'.now()->format('Ymd').'-'.$ibu->id_ibu,
            'ibu' => $ibu,
            'suami' => $ibu->keluarga->firstWhere('status', 'suami'),
            'petugas' => optional($ibu->user)->name,
            'diagnosa' => optional($ibu->pemeriksaanTrimester3->first())->diagnosa,
            'tanggal' => now()->translatedFormat('d F Y')
        ]);
    }

    public function formPersalinan($id_ibu)
    {
        $ibu = Ibu::with(['ibuBersalin', 'bayiLahir'])->findOrFail($id_ibu);
        
        return view('kia.print.form_persalinan', [
            'ibu' => $ibu,
            'persalinan' => $ibu->ibuBersalin->first() ?? new \App\Models\IbuBersalin(),
            'bayi' => $ibu->bayiLahir->first() ?? new \App\Models\BayiLahir(),
            'tanggal' => now()->translatedFormat('d F Y')
        ]);
    }

    public function formBayiBaruLahir($id_bayi)
    {
        $bayi = BayiLahir::with(['ibu'])->findOrFail($id_bayi);
        
        return view('kia.print.form_bayi_baru_lahir', [
            'bayi' => $bayi,
            'ibu' => $bayi->ibu,
            'tanggal' => now()->translatedFormat('d F Y')
        ]);
    }

    public function kunjunganNeonatal07($id_bayi)
    {
        $bayi = BayiLahir::with('ibu')->findOrFail($id_bayi);

        return view('kia.print.kunjungan_neonatal_07', [
            'bayi' => $bayi,
            'kunjungan' => now()->translatedFormat('d F Y'),
            'petugas' => Auth::user()?->name ?? ''
        ]);
    }

    public function kunjunganNeonatal828($id_bayi)
    {
        $bayi = BayiLahir::with('ibu')->findOrFail($id_bayi);

        return view('kia.print.kunjungan_neonatal_828', [
            'bayi' => $bayi,
            'kunjungan' => now()->translatedFormat('d F Y'),
            'petugas' => Auth::user()?->name ?? ''
        ]);
    }
    
    public function formNifas6Jam($id_ibu)
    {
        $ibu = Ibu::with(['kesehatanNifas'])->findOrFail($id_ibu);
        
        return view('kia.print.form_nifas_6jam', [
            'ibu' => $ibu,
            'nifas' => $ibu->kesehatanNifas->first() ?? new \App\Models\KesehatanNifas(),
            'tanggal' => now()->translatedFormat('d F Y')
        ]);
    }

    public function formNifas1_7($id_ibu)
    {
        $ibu = Ibu::with(['kesehatanNifas'])->findOrFail($id_ibu);
        
        return view('kia.print.form_nifas_1_7', [
            'ibu' => $ibu,
            'nifas' => $ibu->kesehatanNifas->first() ?? new KesehatanNifas(),
            'tanggal' => now()->translatedFormat('d F Y')
        ]);
    }

    public function formNifas2_6($id_ibu)
    {
        $ibu = Ibu::with(['kesehatanNifas', 'ringkasanKesimpulanNifas'])->findOrFail($id_ibu);
        
        return view('kia.print.form_nifas_2_6', [
            'ibu' => $ibu,
            'nifas' => $ibu->kesehatanNifas->first() ?? new \App\Models\KesehatanNifas(),
            'kesimpulan' => $ibu->ringkasanKesimpulanNifas->first() ?? new \App\Models\RingkasanKesimpulanNifas(),
            'tanggal' => now()->translatedFormat('d F Y')
        ]);
    }
    public function skriningPreeklampsia($id_ibu)
    {
        $ibu = Ibu::with(['skriningPreeklampsia'])->findOrFail($id_ibu);
        
        return view('kia.print.skrining_preeklampsia', [
            'ibu' => $ibu,
            'skrining' => $ibu->skriningPreeklampsia->first() ?? new \App\Models\SkriningPreeklampsia(),
            'tanggal' => now()->translatedFormat('d F Y')
        ]);
    }

    public function pemantauanAncTrimester1($id_ibu)
    {
        $ibu = Ibu::with([
            'pemeriksaanTrimester1',
            'pemeriksaanTrimester1.pemeriksaanFisikTri1',
            'pemeriksaanTrimester1.usgTri1',
            'pemeriksaanTrimester1.pemeriksaanLaboratoriumTri1',
            'evaluasiKehamilan'
        ])->findOrFail($id_ibu);
        
        return view('kia.print.anc_trimester1', [
            'ibu' => $ibu,
            'pemeriksaan' => $ibu->pemeriksaanTrimester1->first() ?? new \App\Models\PemeriksaanTrimester1(),
            'fisik' => optional($ibu->pemeriksaanTrimester1->first())->pemeriksaanFisikTri1 ?? new \App\Models\PemeriksaanFisikTri1(),
            'usg' => optional($ibu->pemeriksaanTrimester1->first())->usgTri1->first() ?? new \App\Models\UsgTri1(),
            'lab' => optional($ibu->pemeriksaanTrimester1->first())->pemeriksaanLaboratoriumTri1 ?? new \App\Models\PemeriksaanLaboratoriumTri1(),
            'evaluasi' => $ibu->evaluasiKehamilan->first() ?? new \App\Models\EvaluasiKehamilan(),
            'tanggal' => now()->translatedFormat('d F Y'),
        ]);
    }

    public function pemantauanAncTrimester3($id_ibu)
    {
        $ibu = Ibu::with([
            'pemeriksaanTrimester3',
            'pemeriksaanTrimester3.pemeriksaanFisikTri3', 
            'pemeriksaanTrimester3.usgTri3',
            'pemeriksaanTrimester3.pemeriksaanLaboratoriumTri3',
            'skriningPreeklampsia'
        ])->findOrFail($id_ibu);
        
        return view('kia.print.anc_trimester3', [
            'ibu' => $ibu,
            'pemeriksaan' => $ibu->pemeriksaanTrimester3->first() ?? new \App\Models\PemeriksaanTrimester3(),
            'fisik' => optional($ibu->pemeriksaanTrimester3->first())->pemeriksaanFisikTri3 ?? new \App\Models\PemeriksaanFisikTri3(),
            'usg' => optional($ibu->pemeriksaanTrimester3->first())->usgTri3->first() ?? new \App\Models\UsgTri3(),
            'lab' => optional($ibu->pemeriksaanTrimester3->first())->pemeriksaanLaboratoriumTri3 ?? new \App\Models\PemeriksaanLaboratoriumTri3(),
            'skrining' => $ibu->skriningPreeklampsia->first() ?? new \App\Models\SkriningPreeklampsia(),
            'tanggal' => now()->translatedFormat('d F Y')
        ]);
    }

    public function pelayananKbPascaPersalinan($id_ibu)
    {
        $ibu = Ibu::with(['kesehatanNifas', 'bayiLahir'])->findOrFail($id_ibu);
        
        return view('kia.print.kb_pasca_persalinan', [
            'ibu' => $ibu,
            'nifas' => $ibu->kesehatanNifas->first() ?? new \App\Models\KesehatanNifas(),
            'bayi' => $ibu->bayiLahir->first() ?? new \App\Models\BayiLahir(),
            'tanggal' => now()->translatedFormat('d F Y'),
            'today' => now()->format('Y-m-d')
        ]);
    }

    public function pencatatanImunisasiAnak($id_anak)
    {
        $anak = Anak::with([
            'imunisasi' => function($query) {
                $query->orderBy('tanggal', 'asc')
                    ->with('vaksin');
            },
            'wali',
            'bayiBaruLahir'
        ])->findOrFail($id_anak);

        $vaksin_dasar = [
            'HB-0', 'BCG', 'Polio 1', 'DPT-HB-Hib 1', 'Polio 2',
            'DPT-HB-Hib 2', 'Polio 3', 'DPT-HB-Hib 3', 'Polio 4', 'IPV',
            'Campak', 'JE', 'DPT-HB-Hib Lanjutan'
        ];

        return view('kia.print.imunisasi_anak', [
            'anak' => $anak,
            'imunisasi' => $anak->imunisasi ?? collect(),
            'vaksin_dasar' => $vaksin_dasar,
            'tanggal' => now()->translatedFormat('d F Y'),
            'data_anak' => [
                'nama' => $anak->nama,
                'jenis_kelamin' => $anak->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan',
                'tgl_lahir' => optional($anak->tgl_lahir)->translatedFormat('d F Y') ?? '-',
                'usia' => $anak->tgl_lahir ? now()->diffInMonths($anak->tgl_lahir) . ' Bulan' : '-',
                'berat_lahir' => optional($anak->bayiBaruLahir->first())->berat_lahir ?? '-',
                'panjang_lahir' => optional($anak->bayiBaruLahir->first())->panjang_badan ?? '-',
                'alamat' => $anak->alamat,
                'no_register' => $anak->no_reg_kohort_bayi ?? $anak->no_reg_kohort_balita ?? '-'
            ],
            'data_wali' => [
                'nama' => optional($anak->wali)->nama ?? '-',
                'status' => optional($anak->wali)->status ?? '-',
                'telepon' => optional($anak->wali)->telepon ?? '-'
            ]
        ]);
    }

    public function rujukanBayi($id_bayi)
    {
        $bayi = BayiLahir::with('ibu.keluarga')->findOrFail($id_bayi);

        $suami = $bayi->ibu?->keluarga?->firstWhere('status', 'suami');

        $anak = Anak::where('id_wali', $id_bayi)->first();

        $rujukan = $anak?->rujukanAnak()->latest()->first() ?? new RujukanAnak();

        return view('kia.print.rujukan_bayi', [
            'no_rujukan' => 'RB-' . now()->format('YmdHis') . '-' . $id_bayi,
            'bayi'       => $bayi,
            'ibu'        => $bayi->ibu,
            'suami'      => $suami?->nama ?? '-',
            'rujukan'    => $rujukan,
            'tanggal'    => now()->translatedFormat('d F Y'),
            'petugas'    => Auth::user()->name ?? 'Petugas KIA',
        ]);
    }
}
