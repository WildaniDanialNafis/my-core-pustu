<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id_amanat_darah
 * @property int $id_menyambut_persalinan
 * @property string|null $nama
 * @property string|null $hp
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\MenyambutPersalinan $menyambutPersalinan
 * @method static \Database\Factories\AmanatDarahFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatDarah newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatDarah newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatDarah query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatDarah whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatDarah whereHp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatDarah whereIdAmanatDarah($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatDarah whereIdMenyambutPersalinan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatDarah whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatDarah whereUpdatedAt($value)
 */
	class AmanatDarah extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_amanat_kendaraan
 * @property int $id_menyambut_persalinan
 * @property string|null $kendaraan
 * @property string|null $nama
 * @property string|null $hp
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\MenyambutPersalinan $menyambutPersalinan
 * @method static \Database\Factories\AmanatKendaraanFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatKendaraan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatKendaraan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatKendaraan query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatKendaraan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatKendaraan whereHp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatKendaraan whereIdAmanatKendaraan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatKendaraan whereIdMenyambutPersalinan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatKendaraan whereKendaraan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatKendaraan whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatKendaraan whereUpdatedAt($value)
 */
	class AmanatKendaraan extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_amanat_penolong_persalinan
 * @property int $id_menyambut_persalinan
 * @property string|null $penolong_persalinan
 * @property string|null $nama
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\MenyambutPersalinan $menyambutPersalinan
 * @method static \Database\Factories\AmanatPenolongPersalinanFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatPenolongPersalinan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatPenolongPersalinan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatPenolongPersalinan query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatPenolongPersalinan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatPenolongPersalinan whereIdAmanatPenolongPersalinan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatPenolongPersalinan whereIdMenyambutPersalinan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatPenolongPersalinan whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatPenolongPersalinan wherePenolongPersalinan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AmanatPenolongPersalinan whereUpdatedAt($value)
 */
	class AmanatPenolongPersalinan extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_anak
 * @property int $id_wali
 * @property string|null $nama
 * @property int|null $anak_ke
 * @property string|null $no_akte_kelahiran
 * @property string|null $nik
 * @property string|null $tmpt_lahir
 * @property string|null $tgl_lahir
 * @property string|null $gol_darah
 * @property string|null $jenis_pelayanan
 * @property string|null $no_asuransi
 * @property string|null $tgl_berlaku_asuransi
 * @property string|null $fasilitas_pelayanan_kesehatan
 * @property string|null $no_reg_kohort_bayi
 * @property string|null $no_reg_kohort_balita
 * @property string|null $no_catatan_medik_rs
 * @property string|null $provinsi
 * @property string|null $kabupaten
 * @property string|null $alamat
 * @property string|null $telepon
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\AnakBalita> $anakBalita
 * @property-read int|null $anak_balita_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Bayi> $bayi
 * @property-read int|null $bayi_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BayiBaruLahir> $bayiBaruLahir
 * @property-read int|null $bayi_baru_lahir_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BbTbLaki> $bbTbLaki
 * @property-read int|null $bb_tb_laki_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BbTbPerempuan> $bbTbPerempuan
 * @property-read int|null $bb_tb_perempuan_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BbULaki> $bbULaki
 * @property-read int|null $bb_u_laki_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BbUPerempuan> $bbUPerempuan
 * @property-read int|null $bb_u_perempuan_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ImtLaki> $imtLaki
 * @property-read int|null $imt_laki_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ImtPerempuan> $imtPerempuan
 * @property-read int|null $imt_perempuan_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Imunisasi> $imunisasi
 * @property-read int|null $imunisasi_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\KapsulAnak> $kapsulAnak
 * @property-read int|null $kapsul_anak_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\KesehatanGigi> $kesehatanGigi
 * @property-read int|null $kesehatan_gigi_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\KeteranganLahir> $keteranganLahir
 * @property-read int|null $keterangan_lahir_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\KmsLaki> $kmsLaki
 * @property-read int|null $kms_laki_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\KmsPerempuan> $kmsPerempuan
 * @property-read int|null $kms_perempuan_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\LingkarKepalaLaki> $lingkarKepalaLaki
 * @property-read int|null $lingkar_kepala_laki_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\LingkarKepalaPerempuan> $lingkarKepalaPerempuan
 * @property-read int|null $lingkar_kepala_perempuan_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\NasihatAnak> $nasihatAnak
 * @property-read int|null $nasihat_anak_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PelayananKesehatanNeonatus> $pelayananKesehatanNeonatus
 * @property-read int|null $pelayanan_kesehatan_neonatus_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PelayananSdidtk> $pelayananSdidtk
 * @property-read int|null $pelayanan_sdidtk_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PemantauanKia> $pemantauanKia
 * @property-read int|null $pemantauan_kia_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RingkasanMtbs> $ringkasanMtbs
 * @property-read int|null $ringkasan_mtbs_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RingkasanPelayananDokter> $ringkasanPelayananDokter
 * @property-read int|null $ringkasan_pelayanan_dokter_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RiwayatKelahiran> $riwayatKelahiran
 * @property-read int|null $riwayat_kelahiran_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RujukanAnak> $rujukanAnak
 * @property-read int|null $rujukan_anak_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TbULaki> $tbULaki
 * @property-read int|null $tb_u_laki_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TbUPerempuan> $tbUPerempuan
 * @property-read int|null $tb_u_perempuan_count
 * @property-read \App\Models\Wali $wali
 * @method static \Database\Factories\AnakFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Anak newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Anak newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Anak query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Anak whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Anak whereAnakKe($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Anak whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Anak whereFasilitasPelayananKesehatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Anak whereGolDarah($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Anak whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Anak whereIdWali($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Anak whereJenisPelayanan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Anak whereKabupaten($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Anak whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Anak whereNik($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Anak whereNoAkteKelahiran($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Anak whereNoAsuransi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Anak whereNoCatatanMedikRs($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Anak whereNoRegKohortBalita($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Anak whereNoRegKohortBayi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Anak whereProvinsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Anak whereTelepon($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Anak whereTglBerlakuAsuransi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Anak whereTglLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Anak whereTmptLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Anak whereUpdatedAt($value)
 */
	class Anak extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_anak_balita
 * @property int $id_anak
 * @property string|null $tipe
 * @property string|null $tanggal
 * @property string|null $tempat
 * @property float|null $bb
 * @property float|null $pb
 * @property float|null $lk
 * @property string|null $perkembangan
 * @property string|null $kie
 * @property string|null $imunisasi
 * @property string|null $vit_a
 * @property string|null $obat_cacing
 * @property string|null $ppia1
 * @property string|null $ppia2
 * @property string|null $ppia3
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @method static \Database\Factories\AnakBalitaFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnakBalita newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnakBalita newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnakBalita query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnakBalita whereBb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnakBalita whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnakBalita whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnakBalita whereIdAnakBalita($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnakBalita whereImunisasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnakBalita whereKie($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnakBalita whereLk($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnakBalita whereObatCacing($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnakBalita wherePb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnakBalita wherePerkembangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnakBalita wherePpia1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnakBalita wherePpia2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnakBalita wherePpia3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnakBalita whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnakBalita whereTempat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnakBalita whereTipe($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnakBalita whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AnakBalita whereVitA($value)
 */
	class AnakBalita extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_bayi
 * @property int $id_anak
 * @property string|null $tanggal
 * @property string|null $tempat
 * @property float|null $bb
 * @property float|null $pb
 * @property float|null $lk
 * @property string|null $perkembangan
 * @property string|null $kie
 * @property string|null $imunisasi
 * @property string|null $vit_a
 * @property string|null $ppia1
 * @property string|null $ppia2
 * @property string|null $ppia3
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @method static \Database\Factories\BayiFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bayi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bayi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bayi query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bayi whereBb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bayi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bayi whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bayi whereIdBayi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bayi whereImunisasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bayi whereKie($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bayi whereLk($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bayi wherePb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bayi wherePerkembangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bayi wherePpia1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bayi wherePpia2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bayi wherePpia3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bayi whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bayi whereTempat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bayi whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bayi whereVitA($value)
 */
	class Bayi extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_bayi_baru_lahir
 * @property int $id_anak
 * @property string|null $kn
 * @property string|null $tanggal
 * @property string|null $tempat
 * @property string|null $perawatan_tali_pusat
 * @property string|null $imd
 * @property string|null $vitamin_k1
 * @property string|null $imunisasi_hepatitis_b
 * @property string|null $jenis_salep
 * @property string|null $salep
 * @property string|null $jenis_skrining
 * @property string|null $status_skrining
 * @property string|null $kie
 * @property string|null $ppia1
 * @property string|null $ppia2
 * @property string|null $ppia3
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @method static \Database\Factories\BayiBaruLahirFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiBaruLahir newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiBaruLahir newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiBaruLahir query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiBaruLahir whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiBaruLahir whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiBaruLahir whereIdBayiBaruLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiBaruLahir whereImd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiBaruLahir whereImunisasiHepatitisB($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiBaruLahir whereJenisSalep($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiBaruLahir whereJenisSkrining($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiBaruLahir whereKie($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiBaruLahir whereKn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiBaruLahir wherePerawatanTaliPusat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiBaruLahir wherePpia1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiBaruLahir wherePpia2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiBaruLahir wherePpia3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiBaruLahir whereSalep($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiBaruLahir whereStatusSkrining($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiBaruLahir whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiBaruLahir whereTempat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiBaruLahir whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiBaruLahir whereVitaminK1($value)
 */
	class BayiBaruLahir extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_bayi_lahir
 * @property int $id_ibu
 * @property int|null $anak_ke
 * @property float|null $berat_lahir
 * @property float|null $panjang_badan
 * @property float|null $lingkar_kepala
 * @property string|null $jenis_kelamin
 * @property string|null $kondisi_bayi
 * @property string|null $keterangan_kondisi_bayi
 * @property string|null $asuhan_bayi
 * @property string|null $keterangan_tambahan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Ibu $ibu
 * @method static \Database\Factories\BayiLahirFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiLahir newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiLahir newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiLahir query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiLahir whereAnakKe($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiLahir whereAsuhanBayi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiLahir whereBeratLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiLahir whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiLahir whereIdBayiLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiLahir whereIdIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiLahir whereJenisKelamin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiLahir whereKeteranganKondisiBayi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiLahir whereKeteranganTambahan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiLahir whereKondisiBayi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiLahir whereLingkarKepala($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiLahir wherePanjangBadan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BayiLahir whereUpdatedAt($value)
 */
	class BayiLahir extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_bb_tb_laki
 * @property int $id_anak
 * @property float|null $bb
 * @property float|null $tb
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @method static \Database\Factories\BbTbLakiFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbTbLaki newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbTbLaki newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbTbLaki query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbTbLaki whereBb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbTbLaki whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbTbLaki whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbTbLaki whereIdBbTbLaki($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbTbLaki whereTb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbTbLaki whereUpdatedAt($value)
 */
	class BbTbLaki extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_bb_tb_perempuan
 * @property int $id_anak
 * @property float|null $bb
 * @property float|null $tb
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @method static \Database\Factories\BbTbPerempuanFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbTbPerempuan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbTbPerempuan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbTbPerempuan query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbTbPerempuan whereBb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbTbPerempuan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbTbPerempuan whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbTbPerempuan whereIdBbTbPerempuan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbTbPerempuan whereTb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbTbPerempuan whereUpdatedAt($value)
 */
	class BbTbPerempuan extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_bb_u_laki
 * @property int $id_anak
 * @property float|null $bb
 * @property int|null $bulan
 * @property int|null $tahun
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @method static \Database\Factories\BbULakiFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbULaki newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbULaki newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbULaki query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbULaki whereBb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbULaki whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbULaki whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbULaki whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbULaki whereIdBbULaki($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbULaki whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbULaki whereUpdatedAt($value)
 */
	class BbULaki extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_bb_u_perempuan
 * @property int $id_anak
 * @property float|null $bb
 * @property int|null $bulan
 * @property int|null $tahun
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @method static \Database\Factories\BbUPerempuanFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbUPerempuan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbUPerempuan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbUPerempuan query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbUPerempuan whereBb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbUPerempuan whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbUPerempuan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbUPerempuan whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbUPerempuan whereIdBbUPerempuan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbUPerempuan whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BbUPerempuan whereUpdatedAt($value)
 */
	class BbUPerempuan extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_berat_badan_bumil
 * @property int $id_ibu
 * @property int|null $minggu
 * @property float|null $berat_badan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Ibu $ibu
 * @method static \Database\Factories\BeratBadanBumilFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BeratBadanBumil newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BeratBadanBumil newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BeratBadanBumil query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BeratBadanBumil whereBeratBadan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BeratBadanBumil whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BeratBadanBumil whereIdBeratBadanBumil($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BeratBadanBumil whereIdIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BeratBadanBumil whereMinggu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BeratBadanBumil whereUpdatedAt($value)
 */
	class BeratBadanBumil extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_ceklis
 * @property string|null $ceklis
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PemantauanKia> $pemantauanKia
 * @property-read int|null $pemantauan_kia_count
 * @method static \Database\Factories\CeklisFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ceklis newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ceklis newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ceklis query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ceklis whereCeklis($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ceklis whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ceklis whereIdCeklis($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ceklis whereUpdatedAt($value)
 */
	class Ceklis extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_data_kesehatan_gigi
 * @property int $id_kesehatan_gigi
 * @property string|null $pemeriksaan
 * @property int|null $jumlah_gigi
 * @property int|null $jumlah_gigi_berlubang
 * @property string|null $plak
 * @property string|null $risiko_gigi_berlubang
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\KesehatanGigi $kesehatanGigi
 * @method static \Database\Factories\DataKesehatanGigiFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKesehatanGigi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKesehatanGigi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKesehatanGigi query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKesehatanGigi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKesehatanGigi whereIdDataKesehatanGigi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKesehatanGigi whereIdKesehatanGigi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKesehatanGigi whereJumlahGigi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKesehatanGigi whereJumlahGigiBerlubang($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKesehatanGigi wherePemeriksaan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKesehatanGigi wherePlak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKesehatanGigi whereRisikoGigiBerlubang($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKesehatanGigi whereUpdatedAt($value)
 */
	class DataKesehatanGigi extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_data_kms_laki
 * @property int $id_kms_laki
 * @property int|null $umur
 * @property string|null $bulan_penimbangan
 * @property float|null $bb
 * @property float|null $kbm
 * @property string|null $n_t
 * @property string|null $asi_eksklusif
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\KmsLaki $kmsLaki
 * @method static \Database\Factories\DataKmsLakiFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsLaki newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsLaki newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsLaki query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsLaki whereAsiEksklusif($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsLaki whereBb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsLaki whereBulanPenimbangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsLaki whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsLaki whereIdDataKmsLaki($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsLaki whereIdKmsLaki($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsLaki whereKbm($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsLaki whereNT($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsLaki whereUmur($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsLaki whereUpdatedAt($value)
 */
	class DataKmsLaki extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_data_kms_perempuan
 * @property int $id_kms_perempuan
 * @property int|null $umur
 * @property string|null $bulan_penimbangan
 * @property float|null $bb
 * @property float|null $kbm
 * @property string|null $n_t
 * @property string|null $asi_eksklusif
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\KmsPerempuan $kmsPerempuan
 * @method static \Database\Factories\DataKmsPerempuanFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsPerempuan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsPerempuan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsPerempuan query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsPerempuan whereAsiEksklusif($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsPerempuan whereBb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsPerempuan whereBulanPenimbangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsPerempuan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsPerempuan whereIdDataKmsPerempuan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsPerempuan whereIdKmsPerempuan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsPerempuan whereKbm($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsPerempuan whereNT($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsPerempuan whereUmur($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DataKmsPerempuan whereUpdatedAt($value)
 */
	class DataKmsPerempuan extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_evaluasi_kehamilan
 * @property int $id_ibu
 * @property string|null $pemeriksa
 * @property string|null $tanggal
 * @property int|null $usia_gestasi
 * @property int|null $denyut_jantung_janin
 * @property int|null $sistolik
 * @property int|null $diastolik
 * @property int|null $gerakan_bayi
 * @property int|null $urin_protein
 * @property int|null $urin_reduksi
 * @property int|null $hemoglobin
 * @property int|null $kalsium
 * @property int|null $aspirin
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Ibu $ibu
 * @method static \Database\Factories\EvaluasiKehamilanFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKehamilan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKehamilan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKehamilan query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKehamilan whereAspirin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKehamilan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKehamilan whereDenyutJantungJanin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKehamilan whereDiastolik($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKehamilan whereGerakanBayi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKehamilan whereHemoglobin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKehamilan whereIdEvaluasiKehamilan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKehamilan whereIdIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKehamilan whereKalsium($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKehamilan wherePemeriksa($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKehamilan whereSistolik($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKehamilan whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKehamilan whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKehamilan whereUrinProtein($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKehamilan whereUrinReduksi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKehamilan whereUsiaGestasi($value)
 */
	class EvaluasiKehamilan extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_evaluasi_kesehatan_bumil
 * @property int $id_ibu
 * @property string|null $nama_dokter
 * @property string|null $faskes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Ibu $ibu
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ImunisasiT> $imunisasiT
 * @property-read int|null $imunisasi_t_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\KondisiKesehatanBumil> $kondisiKesehatanBumil
 * @property-read int|null $kondisi_kesehatan_bumil_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PemeriksaanKhusus> $pemeriksaanKhusus
 * @property-read int|null $pemeriksaan_khusus_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RiwayatKehamilan> $riwayatKehamilan
 * @property-read int|null $riwayat_kehamilan_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RiwayatKesehatanBumil> $riwayatKesehatanBumil
 * @property-read int|null $riwayat_kesehatan_bumil_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RiwayatPenyakitKeluarga> $riwayatPenyakitKeluarga
 * @property-read int|null $riwayat_penyakit_keluarga_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RiwayatPerilakuBerisiko> $riwayatPerilakuBerisiko
 * @property-read int|null $riwayat_perilaku_berisiko_count
 * @method static \Database\Factories\EvaluasiKesehatanBumilFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKesehatanBumil newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKesehatanBumil newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKesehatanBumil query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKesehatanBumil whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKesehatanBumil whereFaskes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKesehatanBumil whereIdEvaluasiKesehatanBumil($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKesehatanBumil whereIdIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKesehatanBumil whereNamaDokter($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EvaluasiKesehatanBumil whereUpdatedAt($value)
 */
	class EvaluasiKesehatanBumil extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property string $id_ibu
 * @property int $id_user
 * @property string|null $nama
 * @property string|null $pembiayaan
 * @property string|null $no_jkn
 * @property string|null $faskes_tk_1
 * @property string|null $faskes_rujukan
 * @property string|null $gol_darah
 * @property string|null $tmpt_lahir
 * @property string|null $tgl_lahir
 * @property string|null $pendidikan
 * @property string|null $pekerjaan
 * @property string|null $provinsi
 * @property string|null $kabupaten
 * @property string|null $alamat
 * @property string|null $telepon
 * @property string|null $puskesmas_domisili
 * @property string|null $no_reg_kohort_ibu
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BayiLahir> $bayiLahir
 * @property-read int|null $bayi_lahir_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BeratBadanBumil> $beratBadanBumil
 * @property-read int|null $berat_badan_bumil_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\EvaluasiKehamilan> $evaluasiKehamilan
 * @property-read int|null $evaluasi_kehamilan_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\IbuBersalin> $ibuBersalin
 * @property-read int|null $ibu_bersalin_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Keluarga> $keluarga
 * @property-read int|null $keluarga_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Kesehatan1> $kesehatan1
 * @property-read int|null $kesehatan1_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\KesehatanBersalin> $kesehatanBersalin
 * @property-read int|null $kesehatan_bersalin_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\KesehatanNifas> $kesehatanNifas
 * @property-read int|null $kesehatan_nifas_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\KontrolTtd> $kontrolTtd
 * @property-read int|null $kontrol_ttd_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\MenyambutPersalinan> $menyambutPersalinan
 * @property-read int|null $menyambut_persalinan_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PemeriksaanTrimester1> $pemeriksaanTrimester1
 * @property-read int|null $pemeriksaan_trimester1_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PemeriksaanTrimester3> $pemeriksaanTrimester3
 * @property-read int|null $pemeriksaan_trimester3_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RingkasanKesehatan> $ringkasanKesehatan
 * @property-read int|null $ringkasan_kesehatan_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RingkasanKesimpulanNifas> $ringkasanKesimpulanNifas
 * @property-read int|null $ringkasan_kesimpulan_nifas_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RingkasanNifas> $ringkasanNifas
 * @property-read int|null $ringkasan_nifas_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Rujukan> $rujukan
 * @property-read int|null $rujukan_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SkriningPreeklampsia> $skriningPreeklampsia
 * @property-read int|null $skrining_preeklampsia_count
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\IbuFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ibu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ibu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ibu query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ibu whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ibu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ibu whereFaskesRujukan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ibu whereFaskesTk1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ibu whereGolDarah($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ibu whereIdIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ibu whereIdUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ibu whereKabupaten($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ibu whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ibu whereNoJkn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ibu whereNoRegKohortIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ibu wherePekerjaan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ibu wherePembiayaan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ibu wherePendidikan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ibu whereProvinsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ibu wherePuskesmasDomisili($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ibu whereTelepon($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ibu whereTglLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ibu whereTmptLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ibu whereUpdatedAt($value)
 */
	class Ibu extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_ibu_bersalin
 * @property int $id_ibu
 * @property string|null $tanggal_bersalin
 * @property int|null $umur_kehamilan
 * @property string|null $penolong_persalinan
 * @property string|null $keterangan_penolong_persalinan
 * @property string|null $cara_persalinan
 * @property string|null $keterangan_cara_persalinan
 * @property string|null $keadaan_ibu
 * @property string|null $keterangan_keadaan_ibu
 * @property string|null $kb_pasca_persalinan
 * @property string|null $keterangan_tambahan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Ibu $ibu
 * @method static \Database\Factories\IbuBersalinFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IbuBersalin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IbuBersalin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IbuBersalin query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IbuBersalin whereCaraPersalinan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IbuBersalin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IbuBersalin whereIdIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IbuBersalin whereIdIbuBersalin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IbuBersalin whereKbPascaPersalinan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IbuBersalin whereKeadaanIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IbuBersalin whereKeteranganCaraPersalinan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IbuBersalin whereKeteranganKeadaanIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IbuBersalin whereKeteranganPenolongPersalinan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IbuBersalin whereKeteranganTambahan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IbuBersalin wherePenolongPersalinan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IbuBersalin whereTanggalBersalin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IbuBersalin whereUmurKehamilan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IbuBersalin whereUpdatedAt($value)
 */
	class IbuBersalin extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_imt_laki
 * @property int $id_anak
 * @property float|null $imt
 * @property int|null $bulan
 * @property int|null $tahun
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @method static \Database\Factories\ImtLakiFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImtLaki newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImtLaki newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImtLaki query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImtLaki whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImtLaki whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImtLaki whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImtLaki whereIdImtLaki($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImtLaki whereImt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImtLaki whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImtLaki whereUpdatedAt($value)
 */
	class ImtLaki extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_imt_perempuan
 * @property int $id_anak
 * @property float|null $imt
 * @property int|null $bulan
 * @property int|null $tahun
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @method static \Database\Factories\ImtPerempuanFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImtPerempuan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImtPerempuan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImtPerempuan query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImtPerempuan whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImtPerempuan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImtPerempuan whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImtPerempuan whereIdImtPerempuan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImtPerempuan whereImt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImtPerempuan whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImtPerempuan whereUpdatedAt($value)
 */
	class ImtPerempuan extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_imunisasi
 * @property int $id_anak
 * @property int $id_vaksin
 * @property string|null $tanggal
 * @property string|null $paraf
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @property-read \App\Models\Vaksin $vaksin
 * @method static \Database\Factories\ImunisasiFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Imunisasi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Imunisasi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Imunisasi query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Imunisasi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Imunisasi whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Imunisasi whereIdImunisasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Imunisasi whereIdVaksin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Imunisasi whereParaf($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Imunisasi whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Imunisasi whereUpdatedAt($value)
 */
	class Imunisasi extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_imunisasi_t
 * @property int $id_evaluasi_kesehatan_bumil
 * @property string|null $tt_ke
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\EvaluasiKesehatanBumil $evaluasiKesehatanBumil
 * @method static \Database\Factories\ImunisasiTFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImunisasiT newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImunisasiT newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImunisasiT query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImunisasiT whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImunisasiT whereIdEvaluasiKesehatanBumil($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImunisasiT whereIdImunisasiT($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImunisasiT whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImunisasiT whereTtKe($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ImunisasiT whereUpdatedAt($value)
 */
	class ImunisasiT extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_kn0
 * @property int $id_pelayanan_kesehatan_neonatus
 * @property string|null $kondisi
 * @property float|null $bb
 * @property float|null $pb
 * @property float|null $lk
 * @property string|null $imd
 * @property string|null $vit_k1
 * @property string|null $salep
 * @property string|null $tetes_mata
 * @property string|null $imunisasi_hb
 * @property string|null $tanggal
 * @property string|null $nomor_batch
 * @property string|null $masalah
 * @property string|null $dirujuk_ke
 * @property string|null $nama_jelas_petugas
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PelayananKesehatanNeonatus $pelayananKesehatanNeonatus
 * @method static \Database\Factories\KN0Factory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN0 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN0 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN0 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN0 whereBb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN0 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN0 whereDirujukKe($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN0 whereIdKn0($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN0 whereIdPelayananKesehatanNeonatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN0 whereImd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN0 whereImunisasiHb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN0 whereKondisi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN0 whereLk($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN0 whereMasalah($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN0 whereNamaJelasPetugas($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN0 whereNomorBatch($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN0 wherePb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN0 whereSalep($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN0 whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN0 whereTetesMata($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN0 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN0 whereVitK1($value)
 */
	class KN0 extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_kn1
 * @property int $id_pelayanan_kesehatan_neonatus
 * @property string|null $menyusu
 * @property string|null $tali_pusat
 * @property string|null $vit_k1
 * @property string|null $salep
 * @property string|null $tetes_mata
 * @property string|null $imunisasi_hb
 * @property string|null $tanggal
 * @property string|null $nomor_batch
 * @property float|null $bb
 * @property float|null $pb
 * @property float|null $lk
 * @property string|null $skrining_hipotiroid_kogenital
 * @property string|null $masalah
 * @property string|null $dirujuk_ke
 * @property string|null $nama_jelas_petugas
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PelayananKesehatanNeonatus $pelayananKesehatanNeonatus
 * @method static \Database\Factories\KN1Factory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN1 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN1 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN1 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN1 whereBb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN1 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN1 whereDirujukKe($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN1 whereIdKn1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN1 whereIdPelayananKesehatanNeonatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN1 whereImunisasiHb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN1 whereLk($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN1 whereMasalah($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN1 whereMenyusu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN1 whereNamaJelasPetugas($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN1 whereNomorBatch($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN1 wherePb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN1 whereSalep($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN1 whereSkriningHipotiroidKogenital($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN1 whereTaliPusat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN1 whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN1 whereTetesMata($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN1 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN1 whereVitK1($value)
 */
	class KN1 extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_kn2
 * @property int $id_pelayanan_kesehatan_neonatus
 * @property string|null $menyusu
 * @property string|null $tali_pusat
 * @property string|null $tanda_bahaya
 * @property string|null $identifikasi_kuning
 * @property string|null $imunisasi_hb
 * @property string|null $tanggal
 * @property string|null $nomor_batch
 * @property string|null $skrining_hipotiroid_kogenital
 * @property string|null $masalah
 * @property string|null $dirujuk_ke
 * @property string|null $nama_jelas_petugas
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PelayananKesehatanNeonatus $pelayananKesehatanNeonatus
 * @method static \Database\Factories\KN2Factory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN2 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN2 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN2 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN2 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN2 whereDirujukKe($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN2 whereIdKn2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN2 whereIdPelayananKesehatanNeonatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN2 whereIdentifikasiKuning($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN2 whereImunisasiHb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN2 whereMasalah($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN2 whereMenyusu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN2 whereNamaJelasPetugas($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN2 whereNomorBatch($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN2 whereSkriningHipotiroidKogenital($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN2 whereTaliPusat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN2 whereTandaBahaya($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN2 whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN2 whereUpdatedAt($value)
 */
	class KN2 extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_kn3
 * @property int $id_pelayanan_kesehatan_neonatus
 * @property string|null $menyusu
 * @property string|null $tali_pusat
 * @property string|null $tanda_bahaya
 * @property string|null $identifikasi_kuning
 * @property string|null $keterangan_identifikasi_kuning
 * @property string|null $masalah
 * @property string|null $dirujuk_ke
 * @property string|null $nama_jelas_petugas
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PelayananKesehatanNeonatus> $pelayananKesehatanNeonatus
 * @property-read int|null $pelayanan_kesehatan_neonatus_count
 * @method static \Database\Factories\KN3Factory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN3 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN3 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN3 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN3 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN3 whereDirujukKe($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN3 whereIdKn3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN3 whereIdPelayananKesehatanNeonatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN3 whereIdentifikasiKuning($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN3 whereKeteranganIdentifikasiKuning($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN3 whereMasalah($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN3 whereMenyusu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN3 whereNamaJelasPetugas($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN3 whereTaliPusat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN3 whereTandaBahaya($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KN3 whereUpdatedAt($value)
 */
	class KN3 extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_kapsul_anak
 * @property int $id_anak
 * @property int $id_umur_kapsul_anak
 * @property string|null $kapsul
 * @property string|null $februari
 * @property string|null $agustus
 * @property string|null $obat_cacing
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @property-read \App\Models\UmurKapsulAnak $umurKapsulAnak
 * @method static \Database\Factories\KapsulAnakFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KapsulAnak newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KapsulAnak newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KapsulAnak query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KapsulAnak whereAgustus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KapsulAnak whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KapsulAnak whereFebruari($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KapsulAnak whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KapsulAnak whereIdKapsulAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KapsulAnak whereIdUmurKapsulAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KapsulAnak whereKapsul($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KapsulAnak whereObatCacing($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KapsulAnak whereUpdatedAt($value)
 */
	class KapsulAnak extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_keluarga
 * @property int $id_ibu
 * @property string|null $nama
 * @property string|null $pembiayaan
 * @property string|null $no_jkn
 * @property string|null $faskes_tk_1
 * @property string|null $faskes_rujukan
 * @property string|null $gol_darah
 * @property string|null $tmpt_lahir
 * @property string|null $tgl_lahir
 * @property string|null $pendidikan
 * @property string|null $pekerjaan
 * @property string|null $provinsi
 * @property string|null $kabupaten
 * @property string|null $alamat
 * @property string|null $telepon
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Ibu $ibu
 * @method static \Database\Factories\KeluargaFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Keluarga newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Keluarga newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Keluarga query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Keluarga whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Keluarga whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Keluarga whereFaskesRujukan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Keluarga whereFaskesTk1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Keluarga whereGolDarah($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Keluarga whereIdIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Keluarga whereIdKeluarga($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Keluarga whereKabupaten($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Keluarga whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Keluarga whereNoJkn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Keluarga wherePekerjaan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Keluarga wherePembiayaan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Keluarga wherePendidikan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Keluarga whereProvinsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Keluarga whereTelepon($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Keluarga whereTglLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Keluarga whereTmptLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Keluarga whereUpdatedAt($value)
 */
	class Keluarga extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_kesehatan1
 * @property int $id_ibu
 * @property string|null $hpht
 * @property int|null $bb
 * @property int|null $tb
 * @property string|null $imt
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Ibu $ibu
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Kesehatan2> $kesehatan2
 * @property-read int|null $kesehatan2_count
 * @method static \Database\Factories\Kesehatan1Factory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan1 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan1 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan1 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan1 whereBb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan1 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan1 whereHpht($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan1 whereIdIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan1 whereIdKesehatan1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan1 whereImt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan1 whereTb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan1 whereUpdatedAt($value)
 */
	class Kesehatan1 extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_kesehatan2
 * @property int $id_kesehatan1
 * @property string|null $trimester
 * @property string|null $tanggal_periksa
 * @property string|null $tempat
 * @property string|null $timbang
 * @property string|null $ukur_lingkar_lengan_atas
 * @property int|null $tekanan_darah_sistolik
 * @property int|null $tekanan_darah_diastolik
 * @property string|null $periksa_tinggi_rahim
 * @property string|null $periksa_letak_dan_denyut_jantung_janin
 * @property string|null $konseling
 * @property string|null $skrining_dokter
 * @property string|null $tablet_tambah_darah
 * @property string|null $test_lab_hemoglobin
 * @property string|null $test_golongan_darah
 * @property string|null $test_lab_protein_urine
 * @property string|null $test_lab_gula_darah
 * @property string|null $ppia1
 * @property string|null $ppia2
 * @property string|null $ppia3
 * @property string|null $test_laksana_kasus
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Kesehatan1 $kesehatan1
 * @method static \Database\Factories\Kesehatan2Factory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 whereIdKesehatan1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 whereIdKesehatan2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 whereKonseling($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 wherePeriksaLetakDanDenyutJantungJanin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 wherePeriksaTinggiRahim($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 wherePpia1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 wherePpia2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 wherePpia3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 whereSkriningDokter($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 whereTabletTambahDarah($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 whereTanggalPeriksa($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 whereTekananDarahDiastolik($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 whereTekananDarahSistolik($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 whereTempat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 whereTestGolonganDarah($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 whereTestLabGulaDarah($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 whereTestLabHemoglobin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 whereTestLabProteinUrine($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 whereTestLaksanaKasus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 whereTimbang($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 whereTrimester($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 whereUkurLingkarLenganAtas($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Kesehatan2 whereUpdatedAt($value)
 */
	class Kesehatan2 extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_kesehatan_bersalin
 * @property int $id_ibu
 * @property string|null $taksiran_persalinan
 * @property string|null $fasyankes
 * @property string|null $rujukan
 * @property string|null $inisiasi_menyusui_dini
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Ibu $ibu
 * @method static \Database\Factories\KesehatanBersalinFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanBersalin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanBersalin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanBersalin query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanBersalin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanBersalin whereFasyankes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanBersalin whereIdIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanBersalin whereIdKesehatanBersalin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanBersalin whereInisiasiMenyusuiDini($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanBersalin whereRujukan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanBersalin whereTaksiranPersalinan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanBersalin whereUpdatedAt($value)
 */
	class KesehatanBersalin extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_kesehatan_gigi
 * @property int $id_anak
 * @property string|null $nama
 * @property string|null $umur
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DataKesehatanGigi> $dataKesehatanGigi
 * @property-read int|null $data_kesehatan_gigi_count
 * @method static \Database\Factories\KesehatanGigiFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanGigi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanGigi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanGigi query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanGigi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanGigi whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanGigi whereIdKesehatanGigi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanGigi whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanGigi whereUmur($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanGigi whereUpdatedAt($value)
 */
	class KesehatanGigi extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_kesehatan_nifas
 * @property int $id_ibu
 * @property string|null $tanggal_periksa
 * @property string|null $tempat
 * @property string|null $periksa_payudara
 * @property string|null $periksa_pendarahan
 * @property string|null $periksa_jalan_lahir
 * @property string|null $vitamin_a
 * @property string|null $kb_pasca_persalinan
 * @property string|null $konseling
 * @property string|null $test_laksana_kasus
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Ibu $ibu
 * @method static \Database\Factories\KesehatanNifasFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanNifas newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanNifas newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanNifas query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanNifas whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanNifas whereIdIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanNifas whereIdKesehatanNifas($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanNifas whereKbPascaPersalinan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanNifas whereKonseling($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanNifas wherePeriksaJalanLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanNifas wherePeriksaPayudara($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanNifas wherePeriksaPendarahan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanNifas whereTanggalPeriksa($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanNifas whereTempat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanNifas whereTestLaksanaKasus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanNifas whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KesehatanNifas whereVitaminA($value)
 */
	class KesehatanNifas extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_keterangan_lahir
 * @property int $id_anak
 * @property string|null $no
 * @property string|null $tanggal
 * @property string|null $jenis_kelamin
 * @property string|null $jenis_kelahiran
 * @property string|null $keterangan_jenis_kelahiran
 * @property int|null $anak_ke
 * @property int|null $usia_gestasi
 * @property float|null $berat_lahir
 * @property float|null $panjang_badan
 * @property float|null $lingkar_kepala
 * @property string|null $di
 * @property string|null $keterangan_di
 * @property string|null $alamat_anak
 * @property string|null $diberi_nama
 * @property string|null $nama_ibu
 * @property int|null $umur
 * @property string|null $nik_ibu
 * @property string|null $nama_ayah
 * @property string|null $nik_ayah
 * @property string|null $pekerjaan
 * @property string|null $alamat_ortu
 * @property string|null $kecamatan
 * @property string|null $kabupaten
 * @property string|null $tanggal_keterangan_lahir
 * @property string|null $paraf_saksi1
 * @property string|null $nama_saksi1
 * @property string|null $paraf_saksi2
 * @property string|null $nama_saksi2
 * @property string|null $paraf_penolong_persalinan
 * @property string|null $nama_penolong_persalinan
 * @property string|null $fasilitas_kesehatan
 * @property string|null $ttd
 * @property string|null $stempel
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @method static \Database\Factories\KeteranganLahirFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereAlamatAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereAlamatOrtu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereAnakKe($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereBeratLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereDi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereDiberiNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereFasilitasKesehatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereIdKeteranganLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereJenisKelahiran($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereJenisKelamin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereKabupaten($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereKecamatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereKeteranganDi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereKeteranganJenisKelahiran($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereLingkarKepala($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereNamaAyah($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereNamaIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereNamaPenolongPersalinan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereNamaSaksi1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereNamaSaksi2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereNikAyah($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereNikIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir wherePanjangBadan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereParafPenolongPersalinan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereParafSaksi1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereParafSaksi2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir wherePekerjaan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereStempel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereTanggalKeteranganLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereTtd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereUmur($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KeteranganLahir whereUsiaGestasi($value)
 */
	class KeteranganLahir extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_kms_laki
 * @property int $id_anak
 * @property string|null $nama_anak
 * @property string|null $nama_posyandu
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DataKmsLaki> $dataKmsLaki
 * @property-read int|null $data_kms_laki_count
 * @method static \Database\Factories\KmsLakiFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KmsLaki newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KmsLaki newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KmsLaki query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KmsLaki whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KmsLaki whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KmsLaki whereIdKmsLaki($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KmsLaki whereNamaAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KmsLaki whereNamaPosyandu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KmsLaki whereUpdatedAt($value)
 */
	class KmsLaki extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_kms_perempuan
 * @property int $id_anak
 * @property string|null $nama_anak
 * @property string|null $nama_posyandu
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DataKmsPerempuan> $dataKmsPerempuan
 * @property-read int|null $data_kms_perempuan_count
 * @method static \Database\Factories\KmsPerempuanFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KmsPerempuan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KmsPerempuan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KmsPerempuan query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KmsPerempuan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KmsPerempuan whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KmsPerempuan whereIdKmsPerempuan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KmsPerempuan whereNamaAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KmsPerempuan whereNamaPosyandu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KmsPerempuan whereUpdatedAt($value)
 */
	class KmsPerempuan extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_kondisi_kesehatan_bumil
 * @property int $id_evaluasi_kesehatan_bumil
 * @property string|null $tanggal_periksa
 * @property float|null $tb
 * @property float|null $bb
 * @property float|null $lila
 * @property float|null $imt
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\EvaluasiKesehatanBumil $evaluasiKesehatanBumil
 * @method static \Database\Factories\KondisiKesehatanBumilFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KondisiKesehatanBumil newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KondisiKesehatanBumil newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KondisiKesehatanBumil query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KondisiKesehatanBumil whereBb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KondisiKesehatanBumil whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KondisiKesehatanBumil whereIdEvaluasiKesehatanBumil($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KondisiKesehatanBumil whereIdKondisiKesehatanBumil($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KondisiKesehatanBumil whereImt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KondisiKesehatanBumil whereLila($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KondisiKesehatanBumil whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KondisiKesehatanBumil whereTanggalPeriksa($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KondisiKesehatanBumil whereTb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KondisiKesehatanBumil whereUpdatedAt($value)
 */
	class KondisiKesehatanBumil extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_kontrol_ttd
 * @property int $id_ibu
 * @property string|null $nama_pengontrol
 * @property string|null $hubungan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Ibu $ibu
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\MinumTtd> $minumTtd
 * @property-read int|null $minum_ttd_count
 * @method static \Database\Factories\KontrolTtdFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KontrolTtd newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KontrolTtd newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KontrolTtd query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KontrolTtd whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KontrolTtd whereHubungan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KontrolTtd whereIdIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KontrolTtd whereIdKontrolTtd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KontrolTtd whereNamaPengontrol($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KontrolTtd whereUpdatedAt($value)
 */
	class KontrolTtd extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_kriteria_anamnesis
 * @property string|null $kriteria_anamnesis
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PreeklampsiaAnamnesis> $preeklampsiaAnamnesis
 * @property-read int|null $preeklampsia_anamnesis_count
 * @method static \Database\Factories\KriteriaAnamnesisFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KriteriaAnamnesis newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KriteriaAnamnesis newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KriteriaAnamnesis query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KriteriaAnamnesis whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KriteriaAnamnesis whereIdKriteriaAnamnesis($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KriteriaAnamnesis whereKriteriaAnamnesis($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KriteriaAnamnesis whereUpdatedAt($value)
 */
	class KriteriaAnamnesis extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_kriteria_pemeriksaan_fisik
 * @property string|null $kriteria_pemeriksaan_fisik
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PreeklampsiaFisik> $preeklampsiaFisik
 * @property-read int|null $preeklampsia_fisik_count
 * @method static \Database\Factories\KriteriaPemeriksaanFisikFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KriteriaPemeriksaanFisik newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KriteriaPemeriksaanFisik newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KriteriaPemeriksaanFisik query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KriteriaPemeriksaanFisik whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KriteriaPemeriksaanFisik whereIdKriteriaPemeriksaanFisik($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KriteriaPemeriksaanFisik whereKriteriaPemeriksaanFisik($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KriteriaPemeriksaanFisik whereUpdatedAt($value)
 */
	class KriteriaPemeriksaanFisik extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_lingkar_kepala_laki
 * @property int $id_anak
 * @property float|null $lingkar_kepala
 * @property int|null $bulan
 * @property int|null $tahun
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @method static \Database\Factories\LingkarKepalaLakiFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LingkarKepalaLaki newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LingkarKepalaLaki newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LingkarKepalaLaki query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LingkarKepalaLaki whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LingkarKepalaLaki whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LingkarKepalaLaki whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LingkarKepalaLaki whereIdLingkarKepalaLaki($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LingkarKepalaLaki whereLingkarKepala($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LingkarKepalaLaki whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LingkarKepalaLaki whereUpdatedAt($value)
 */
	class LingkarKepalaLaki extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_lingkar_kepala_perempuan
 * @property int $id_anak
 * @property float|null $lingkar_kepala
 * @property int|null $bulan
 * @property int|null $tahun
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @method static \Database\Factories\LingkarKepalaPerempuanFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LingkarKepalaPerempuan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LingkarKepalaPerempuan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LingkarKepalaPerempuan query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LingkarKepalaPerempuan whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LingkarKepalaPerempuan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LingkarKepalaPerempuan whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LingkarKepalaPerempuan whereIdLingkarKepalaPerempuan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LingkarKepalaPerempuan whereLingkarKepala($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LingkarKepalaPerempuan whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LingkarKepalaPerempuan whereUpdatedAt($value)
 */
	class LingkarKepalaPerempuan extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_menyambut_persalinan
 * @property int $id_ibu
 * @property string|null $nama_pembuat
 * @property string|null $alamat
 * @property string|null $perkiraan_bulan_lahir
 * @property string|null $perkiraan_tahun_lahir
 * @property string|null $dana_persalinan
 * @property string|null $dibantu_oleh
 * @property string|null $metode_kontrasepsi
 * @property string|null $golongan_darah
 * @property string|null $rhesus
 * @property string|null $bersedia_dirujuk
 * @property string|null $tanggal
 * @property string|null $persetujuan
 * @property string|null $paraf_persetujuan
 * @property string|null $nama_persetujuan
 * @property string|null $paraf_bumil
 * @property string|null $nama_bumil
 * @property string|null $nakes
 * @property string|null $paraf_nakes
 * @property string|null $nama_nakes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\AmanatDarah> $amanatDarah
 * @property-read int|null $amanat_darah_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\AmanatKendaraan> $amanatKendaraan
 * @property-read int|null $amanat_kendaraan_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\AmanatPenolongPersalinan> $amanatPenolongPersalinan
 * @property-read int|null $amanat_penolong_persalinan_count
 * @property-read \App\Models\Ibu $ibu
 * @method static \Database\Factories\MenyambutPersalinanFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan whereBersediaDirujuk($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan whereDanaPersalinan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan whereDibantuOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan whereGolonganDarah($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan whereIdIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan whereIdMenyambutPersalinan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan whereMetodeKontrasepsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan whereNakes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan whereNamaBumil($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan whereNamaNakes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan whereNamaPembuat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan whereNamaPersetujuan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan whereParafBumil($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan whereParafNakes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan whereParafPersetujuan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan wherePerkiraanBulanLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan wherePerkiraanTahunLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan wherePersetujuan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan whereRhesus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MenyambutPersalinan whereUpdatedAt($value)
 */
	class MenyambutPersalinan extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_minum_ttd
 * @property int $id_kontrol_ttd
 * @property string $bulan_ke
 * @property string|null $keterangan
 * @property string|null $nama_bulan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\KontrolTtd $kontrolTtd
 * @method static \Database\Factories\MinumTtdFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MinumTtd newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MinumTtd newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MinumTtd query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MinumTtd whereBulanKe($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MinumTtd whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MinumTtd whereIdKontrolTtd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MinumTtd whereIdMinumTtd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MinumTtd whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MinumTtd whereNamaBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MinumTtd whereUpdatedAt($value)
 */
	class MinumTtd extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_nasihat_anak
 * @property int $id_anak
 * @property int $id_umur_nasihat_anak
 * @property string|null $nasihat
 * @property string|null $tanggal
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @property-read \App\Models\UmurNasihatAnak $umurNasihatAnak
 * @method static \Database\Factories\NasihatAnakFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NasihatAnak newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NasihatAnak newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NasihatAnak query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NasihatAnak whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NasihatAnak whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NasihatAnak whereIdNasihatAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NasihatAnak whereIdUmurNasihatAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NasihatAnak whereNasihat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NasihatAnak whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NasihatAnak whereUpdatedAt($value)
 */
	class NasihatAnak extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_pelayanan_kesehatan_neonatus
 * @property int $id_anak
 * @property string|null $catatan_penting
 * @property string|null $nama_nakes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\KN0> $kn0
 * @property-read int|null $kn0_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\KN1> $kn1
 * @property-read int|null $kn1_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\KN2> $kn2
 * @property-read int|null $kn2_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\KN3> $kn3
 * @property-read int|null $kn3_count
 * @method static \Database\Factories\PelayananKesehatanNeonatusFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PelayananKesehatanNeonatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PelayananKesehatanNeonatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PelayananKesehatanNeonatus query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PelayananKesehatanNeonatus whereCatatanPenting($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PelayananKesehatanNeonatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PelayananKesehatanNeonatus whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PelayananKesehatanNeonatus whereIdPelayananKesehatanNeonatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PelayananKesehatanNeonatus whereNamaNakes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PelayananKesehatanNeonatus whereUpdatedAt($value)
 */
	class PelayananKesehatanNeonatus extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_pelayanan_sdidtk
 * @property int $id_anak
 * @property int $id_umur_sdidtk
 * @property string|null $tindakan
 * @property string|null $kunjungan_ulang
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PenyimpanganEmosional> $penyimpanganEmosional
 * @property-read int|null $penyimpangan_emosional_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PenyimpanganPertumbuhan> $penyimpanganPertumbuhan
 * @property-read int|null $penyimpangan_pertumbuhan_count
 * @property-read \App\Models\UmurSdidtk $umurSdidtk
 * @method static \Database\Factories\PelayananSdidtkFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PelayananSdidtk newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PelayananSdidtk newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PelayananSdidtk query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PelayananSdidtk whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PelayananSdidtk whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PelayananSdidtk whereIdPelayananSdidtk($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PelayananSdidtk whereIdUmurSdidtk($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PelayananSdidtk whereKunjunganUlang($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PelayananSdidtk whereTindakan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PelayananSdidtk whereUpdatedAt($value)
 */
	class PelayananSdidtk extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_pemantauan_kia
 * @property int $id_anak
 * @property int $id_ceklis
 * @property string|null $hasil_pemantauan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @property-read \App\Models\Ceklis $ceklis
 * @method static \Database\Factories\PemantauanKiaFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemantauanKia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemantauanKia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemantauanKia query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemantauanKia whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemantauanKia whereHasilPemantauan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemantauanKia whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemantauanKia whereIdCeklis($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemantauanKia whereIdPemantauanKia($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemantauanKia whereUpdatedAt($value)
 */
	class PemantauanKia extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_pemeriksaan_fisik_tri1
 * @property int $id_pemeriksaan_trimester1
 * @property string|null $keadaan_umum
 * @property string|null $konjuctiva
 * @property string|null $sklera
 * @property string|null $kulit
 * @property string|null $leher
 * @property string|null $gigi_mulut
 * @property string|null $tht
 * @property string|null $jantung
 * @property string|null $paru
 * @property string|null $perut
 * @property string|null $tungkai
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PemeriksaanTrimester1 $pemeriksaanTrimester1
 * @method static \Database\Factories\PemeriksaanFisikTri1Factory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri1 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri1 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri1 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri1 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri1 whereGigiMulut($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri1 whereIdPemeriksaanFisikTri1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri1 whereIdPemeriksaanTrimester1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri1 whereJantung($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri1 whereKeadaanUmum($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri1 whereKonjuctiva($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri1 whereKulit($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri1 whereLeher($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri1 whereParu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri1 wherePerut($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri1 whereSklera($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri1 whereTht($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri1 whereTungkai($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri1 whereUpdatedAt($value)
 */
	class PemeriksaanFisikTri1 extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_pemeriksaan_fisik_tri3
 * @property int $id_pemeriksaan_trimester3
 * @property string|null $keadaan_umum
 * @property string|null $konjuctiva
 * @property string|null $sklera
 * @property string|null $gigi_mulut
 * @property string|null $tht
 * @property string|null $leher
 * @property string|null $jantung
 * @property string|null $paru
 * @property string|null $perut
 * @property string|null $tungkai
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PemeriksaanTrimester3 $pemeriksaanTrimester3
 * @method static \Database\Factories\PemeriksaanFisikTri3Factory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri3 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri3 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri3 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri3 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri3 whereGigiMulut($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri3 whereIdPemeriksaanFisikTri3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri3 whereIdPemeriksaanTrimester3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri3 whereJantung($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri3 whereKeadaanUmum($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri3 whereKonjuctiva($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri3 whereLeher($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri3 whereParu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri3 wherePerut($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri3 whereSklera($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri3 whereTht($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri3 whereTungkai($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanFisikTri3 whereUpdatedAt($value)
 */
	class PemeriksaanFisikTri3 extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_pemeriksaan_khusus
 * @property int $id_evaluasi_kesehatan_bumil
 * @property string|null $inspekulo
 * @property string|null $vulva
 * @property string|null $uretra
 * @property string|null $vagina
 * @property string|null $fluksus
 * @property string|null $fluor
 * @property string|null $porsio
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\EvaluasiKesehatanBumil $evaluasiKesehatanBumil
 * @method static \Database\Factories\PemeriksaanKhususFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanKhusus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanKhusus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanKhusus query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanKhusus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanKhusus whereFluksus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanKhusus whereFluor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanKhusus whereIdEvaluasiKesehatanBumil($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanKhusus whereIdPemeriksaanKhusus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanKhusus whereInspekulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanKhusus wherePorsio($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanKhusus whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanKhusus whereUretra($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanKhusus whereVagina($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanKhusus whereVulva($value)
 */
	class PemeriksaanKhusus extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_pemeriksaan_laboratorium_tri1
 * @property int $id_pemeriksaan_trimester1
 * @property string|null $tanggal
 * @property float|null $hemoglobin
 * @property string|null $tindak_hemoglobin
 * @property string|null $goldar
 * @property string|null $rhesus
 * @property string|null $tindak_goldar_rhesus
 * @property float|null $gula_darah_sewaktu
 * @property string|null $tindak_gula_darah
 * @property string|null $ppia
 * @property string|null $tindak_ppia
 * @property string|null $h
 * @property string|null $tindak_h
 * @property string|null $s
 * @property string|null $tindak_s
 * @property string|null $hepatitis_b
 * @property string|null $tindak_hepatitis_b
 * @property string|null $lain_lain
 * @property string|null $tindak_lain_lain
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PemeriksaanTrimester1 $pemeriksaanTrimester1
 * @method static \Database\Factories\PemeriksaanLaboratoriumTri1Factory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri1 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri1 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri1 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri1 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri1 whereGoldar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri1 whereGulaDarahSewaktu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri1 whereH($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri1 whereHemoglobin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri1 whereHepatitisB($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri1 whereIdPemeriksaanLaboratoriumTri1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri1 whereIdPemeriksaanTrimester1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri1 whereLainLain($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri1 wherePpia($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri1 whereRhesus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri1 whereS($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri1 whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri1 whereTindakGoldarRhesus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri1 whereTindakGulaDarah($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri1 whereTindakH($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri1 whereTindakHemoglobin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri1 whereTindakHepatitisB($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri1 whereTindakLainLain($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri1 whereTindakPpia($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri1 whereTindakS($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri1 whereUpdatedAt($value)
 */
	class PemeriksaanLaboratoriumTri1 extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_pemeriksaan_laboratorium_tri3
 * @property int $id_pemeriksaan_trimester3
 * @property string|null $tanggal
 * @property float|null $hemoglobin
 * @property string|null $tindak_hemoglobin
 * @property float|null $gula_darah_puasa
 * @property string|null $tindak_gula_puasa
 * @property float|null $gula_darah_2_jam_post_pradinal
 * @property string|null $tindak_gula_darah_2_jam_post_pradinal
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PemeriksaanTrimester3 $pemeriksaanTrimester3
 * @method static \Database\Factories\PemeriksaanLaboratoriumTri3Factory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri3 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri3 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri3 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri3 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri3 whereGulaDarah2JamPostPradinal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri3 whereGulaDarahPuasa($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri3 whereHemoglobin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri3 whereIdPemeriksaanLaboratoriumTri3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri3 whereIdPemeriksaanTrimester3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri3 whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri3 whereTindakGulaDarah2JamPostPradinal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri3 whereTindakGulaPuasa($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri3 whereTindakHemoglobin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanLaboratoriumTri3 whereUpdatedAt($value)
 */
	class PemeriksaanLaboratoriumTri3 extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_pemeriksaan_trimester1
 * @property int $id_ibu
 * @property string|null $kesimpulan
 * @property string|null $rekomendasi
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Ibu $ibu
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PemeriksaanFisikTri1> $pemeriksaanFisikTri1
 * @property-read int|null $pemeriksaan_fisik_tri1_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PemeriksaanLaboratoriumTri1> $pemeriksaanLaboratoriumTri1
 * @property-read int|null $pemeriksaan_laboratorium_tri1_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UsgTri1> $usgTri1
 * @property-read int|null $usg_tri1_count
 * @method static \Database\Factories\PemeriksaanTrimester1Factory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanTrimester1 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanTrimester1 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanTrimester1 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanTrimester1 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanTrimester1 whereIdIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanTrimester1 whereIdPemeriksaanTrimester1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanTrimester1 whereKesimpulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanTrimester1 whereRekomendasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanTrimester1 whereUpdatedAt($value)
 */
	class PemeriksaanTrimester1 extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_pemeriksaan_trimester3
 * @property int $id_ibu
 * @property string|null $rencana_konsultasi_lanjut
 * @property string|null $rencana_tempat_bersalin
 * @property string|null $rencana_kontrasepsi
 * @property string|null $konseling
 * @property string|null $jelaskan
 * @property string|null $kesimpulan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Ibu $ibu
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PemeriksaanFisikTri3> $pemeriksaanFisikTri3
 * @property-read int|null $pemeriksaan_fisik_tri3_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PemeriksaanLaboratoriumTri3> $pemeriksaanTrimester3
 * @property-read int|null $pemeriksaan_trimester3_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UsgTri3> $usgTri3
 * @property-read int|null $usg_tri3_count
 * @method static \Database\Factories\PemeriksaanTrimester3Factory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanTrimester3 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanTrimester3 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanTrimester3 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanTrimester3 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanTrimester3 whereIdIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanTrimester3 whereIdPemeriksaanTrimester3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanTrimester3 whereJelaskan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanTrimester3 whereKesimpulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanTrimester3 whereKonseling($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanTrimester3 whereRencanaKonsultasiLanjut($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanTrimester3 whereRencanaKontrasepsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanTrimester3 whereRencanaTempatBersalin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PemeriksaanTrimester3 whereUpdatedAt($value)
 */
	class PemeriksaanTrimester3 extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_penyimpangan_emosional
 * @property int $id_pelayanan_sdidtk
 * @property string|null $kmpe
 * @property string|null $m_chat
 * @property string|null $gpph
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PelayananSdidtk $pelayananSdidtk
 * @method static \Database\Factories\PenyimpanganEmosionalFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganEmosional newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganEmosional newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganEmosional query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganEmosional whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganEmosional whereGpph($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganEmosional whereIdPelayananSdidtk($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganEmosional whereIdPenyimpanganEmosional($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganEmosional whereKmpe($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganEmosional whereMChat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganEmosional whereUpdatedAt($value)
 */
	class PenyimpanganEmosional extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_penyimpangan_perkembangan
 * @property int $id_pelayanan_sdidtk
 * @property string|null $kpsp
 * @property string|null $tdd
 * @property string|null $tdl
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PelayananSdidtk $pelayananSdidtk
 * @method static \Database\Factories\PenyimpanganPerkembanganFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganPerkembangan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganPerkembangan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganPerkembangan query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganPerkembangan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganPerkembangan whereIdPelayananSdidtk($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganPerkembangan whereIdPenyimpanganPerkembangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganPerkembangan whereKpsp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganPerkembangan whereTdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganPerkembangan whereTdl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganPerkembangan whereUpdatedAt($value)
 */
	class PenyimpanganPerkembangan extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_penyimpangan_pertumbuhan
 * @property int $id_pelayanan_sdidtk
 * @property string|null $bb_u
 * @property string|null $bb_tb
 * @property string|null $tb_u
 * @property string|null $lk_u
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PelayananSdidtk $pelayananSdidtk
 * @method static \Database\Factories\PenyimpanganPertumbuhanFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganPertumbuhan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganPertumbuhan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganPertumbuhan query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganPertumbuhan whereBbTb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganPertumbuhan whereBbU($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganPertumbuhan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganPertumbuhan whereIdPelayananSdidtk($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganPertumbuhan whereIdPenyimpanganPertumbuhan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganPertumbuhan whereLkU($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganPertumbuhan whereTbU($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenyimpanganPertumbuhan whereUpdatedAt($value)
 */
	class PenyimpanganPertumbuhan extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_preeklampsia_anamnesis
 * @property int $id_skrining_preeklampsia
 * @property int $id_kriteria_anamnesis
 * @property string|null $risiko
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\KriteriaAnamnesis $kriteriaAnamnesis
 * @property-read \App\Models\SkriningPreeklampsia $skriningPreeklampsia
 * @method static \Database\Factories\PreeklampsiaAnamnesisFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PreeklampsiaAnamnesis newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PreeklampsiaAnamnesis newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PreeklampsiaAnamnesis query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PreeklampsiaAnamnesis whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PreeklampsiaAnamnesis whereIdKriteriaAnamnesis($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PreeklampsiaAnamnesis whereIdPreeklampsiaAnamnesis($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PreeklampsiaAnamnesis whereIdSkriningPreeklampsia($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PreeklampsiaAnamnesis whereRisiko($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PreeklampsiaAnamnesis whereUpdatedAt($value)
 */
	class PreeklampsiaAnamnesis extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_preeklampsia_fisik
 * @property int $id_skrining_preeklampsia
 * @property int $id_kriteria_pemeriksaan_fisik
 * @property string|null $risiko
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\KriteriaPemeriksaanFisik $kriteriaPemeriksaanFisik
 * @property-read \App\Models\SkriningPreeklampsia $skriningPreeklampsia
 * @method static \Database\Factories\PreeklampsiaFisikFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PreeklampsiaFisik newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PreeklampsiaFisik newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PreeklampsiaFisik query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PreeklampsiaFisik whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PreeklampsiaFisik whereIdKriteriaPemeriksaanFisik($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PreeklampsiaFisik whereIdPreeklampsiaFisik($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PreeklampsiaFisik whereIdSkriningPreeklampsia($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PreeklampsiaFisik whereRisiko($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PreeklampsiaFisik whereUpdatedAt($value)
 */
	class PreeklampsiaFisik extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_ringkasan_kesehatan
 * @property int $id_ibu
 * @property string|null $tanggal_periksa
 * @property string|null $nama
 * @property string|null $paraf
 * @property string|null $keluhan
 * @property string|null $pemeriksaan
 * @property string|null $tindakan
 * @property string|null $tanggal_kembali
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Ibu $ibu
 * @method static \Database\Factories\RingkasanKesehatanFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesehatan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesehatan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesehatan query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesehatan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesehatan whereIdIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesehatan whereIdRingkasanKesehatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesehatan whereKeluhan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesehatan whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesehatan whereParaf($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesehatan wherePemeriksaan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesehatan whereTanggalKembali($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesehatan whereTanggalPeriksa($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesehatan whereTindakan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesehatan whereUpdatedAt($value)
 */
	class RingkasanKesehatan extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_ringkasan_kesimpulan_nifas
 * @property int $id_ibu
 * @property string|null $keadaan_ibu
 * @property string|null $keadaan_bayi
 * @property string|null $keterangan_keadaan_bayi
 * @property string|null $komplikasi_nifas
 * @property string|null $keterangan_komplikasi_nifas
 * @property string|null $kesimpulan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Ibu $ibu
 * @method static \Database\Factories\RingkasanKesimpulanNifasFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesimpulanNifas newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesimpulanNifas newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesimpulanNifas query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesimpulanNifas whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesimpulanNifas whereIdIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesimpulanNifas whereIdRingkasanKesimpulanNifas($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesimpulanNifas whereKeadaanBayi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesimpulanNifas whereKeadaanIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesimpulanNifas whereKesimpulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesimpulanNifas whereKeteranganKeadaanBayi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesimpulanNifas whereKeteranganKomplikasiNifas($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesimpulanNifas whereKomplikasiNifas($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanKesimpulanNifas whereUpdatedAt($value)
 */
	class RingkasanKesimpulanNifas extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_ringkasan_mtbs
 * @property int $id_anak
 * @property string|null $tanggal
 * @property string|null $puskesmas
 * @property string|null $catatan
 * @property string|null $tanggal_kembali
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @method static \Database\Factories\RingkasanMtbsFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanMtbs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanMtbs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanMtbs query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanMtbs whereCatatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanMtbs whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanMtbs whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanMtbs whereIdRingkasanMtbs($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanMtbs wherePuskesmas($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanMtbs whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanMtbs whereTanggalKembali($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanMtbs whereUpdatedAt($value)
 */
	class RingkasanMtbs extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_ringkasan_nifas
 * @property int $id_ibu
 * @property string|null $kf
 * @property string|null $tanggal
 * @property string|null $faskes
 * @property string|null $klasifikasi
 * @property string|null $tindakan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Ibu $ibu
 * @method static \Database\Factories\RingkasanNifasFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanNifas newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanNifas newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanNifas query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanNifas whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanNifas whereFaskes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanNifas whereIdIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanNifas whereIdRingkasanNifas($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanNifas whereKf($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanNifas whereKlasifikasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanNifas whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanNifas whereTindakan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanNifas whereUpdatedAt($value)
 */
	class RingkasanNifas extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_ringkasan_pelayanan_dokter
 * @property int $id_anak
 * @property string|null $tanggal
 * @property string|null $pemeriksa
 * @property string|null $stamp
 * @property string|null $paraf
 * @property string|null $keluhan
 * @property string|null $pemeriksaan
 * @property string|null $tindakan
 * @property string|null $tanggal_kembali
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @method static \Database\Factories\RingkasanPelayananDokterFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanPelayananDokter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanPelayananDokter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanPelayananDokter query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanPelayananDokter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanPelayananDokter whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanPelayananDokter whereIdRingkasanPelayananDokter($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanPelayananDokter whereKeluhan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanPelayananDokter whereParaf($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanPelayananDokter wherePemeriksa($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanPelayananDokter wherePemeriksaan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanPelayananDokter whereStamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanPelayananDokter whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanPelayananDokter whereTanggalKembali($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanPelayananDokter whereTindakan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RingkasanPelayananDokter whereUpdatedAt($value)
 */
	class RingkasanPelayananDokter extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_riwayat_kehamilan
 * @property int $id_evaluasi_kesehatan_bumil
 * @property string|null $tahun
 * @property float|null $berat_lahir
 * @property string|null $persalinan
 * @property string|null $penolong_persalinan
 * @property string|null $komplikasi
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\EvaluasiKesehatanBumil $evaluasiKesehatanBumil
 * @method static \Database\Factories\RiwayatKehamilanFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKehamilan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKehamilan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKehamilan query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKehamilan whereBeratLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKehamilan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKehamilan whereIdEvaluasiKesehatanBumil($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKehamilan whereIdRiwayatKehamilan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKehamilan whereKomplikasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKehamilan wherePenolongPersalinan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKehamilan wherePersalinan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKehamilan whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKehamilan whereUpdatedAt($value)
 */
	class RiwayatKehamilan extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_riwayat_kelahiran
 * @property int $id_anak
 * @property string|null $g
 * @property string|null $p
 * @property string|null $a
 * @property string|null $tanggal_lahir
 * @property string|null $persalinan
 * @property string|null $tindakan
 * @property string|null $penolong_persalinan
 * @property string|null $cap_kaki_bayi
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @method static \Database\Factories\RiwayatKelahiranFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKelahiran newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKelahiran newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKelahiran query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKelahiran whereA($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKelahiran whereCapKakiBayi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKelahiran whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKelahiran whereG($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKelahiran whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKelahiran whereIdRiwayatKelahiran($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKelahiran whereP($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKelahiran wherePenolongPersalinan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKelahiran wherePersalinan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKelahiran whereTanggalLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKelahiran whereTindakan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKelahiran whereUpdatedAt($value)
 */
	class RiwayatKelahiran extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_riwayat_kesehatan_bumil
 * @property int $id_evaluasi_kesehatan_bumil
 * @property string|null $riwayat_penyakit
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\EvaluasiKesehatanBumil $evaluasiKesehatanBumil
 * @method static \Database\Factories\RiwayatKesehatanBumilFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKesehatanBumil newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKesehatanBumil newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKesehatanBumil query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKesehatanBumil whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKesehatanBumil whereIdEvaluasiKesehatanBumil($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKesehatanBumil whereIdRiwayatKesehatanBumil($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKesehatanBumil whereRiwayatPenyakit($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatKesehatanBumil whereUpdatedAt($value)
 */
	class RiwayatKesehatanBumil extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_riwayat_penyakit_keluarga
 * @property int $id_evaluasi_kesehatan_bumil
 * @property string|null $riwayat_penyakit
 * @property string|null $penjelasan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\EvaluasiKesehatanBumil $evaluasiKesehatanBumil
 * @method static \Database\Factories\RiwayatPenyakitKeluargaFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatPenyakitKeluarga newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatPenyakitKeluarga newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatPenyakitKeluarga query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatPenyakitKeluarga whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatPenyakitKeluarga whereIdEvaluasiKesehatanBumil($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatPenyakitKeluarga whereIdRiwayatPenyakitKeluarga($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatPenyakitKeluarga wherePenjelasan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatPenyakitKeluarga whereRiwayatPenyakit($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatPenyakitKeluarga whereUpdatedAt($value)
 */
	class RiwayatPenyakitKeluarga extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_riwayat_perilaku_berisiko
 * @property int $id_evaluasi_kesehatan_bumil
 * @property string|null $perilaku
 * @property string|null $penjelasan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\EvaluasiKesehatanBumil $evaluasiKesehatanBumil
 * @method static \Database\Factories\RiwayatPerilakuBerisikoFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatPerilakuBerisiko newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatPerilakuBerisiko newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatPerilakuBerisiko query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatPerilakuBerisiko whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatPerilakuBerisiko whereIdEvaluasiKesehatanBumil($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatPerilakuBerisiko whereIdRiwayatPerilakuBerisiko($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatPerilakuBerisiko wherePenjelasan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatPerilakuBerisiko wherePerilaku($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RiwayatPerilakuBerisiko whereUpdatedAt($value)
 */
	class RiwayatPerilakuBerisiko extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_rujukan
 * @property int $id_ibu
 * @property string|null $rujukan
 * @property string|null $tanggal_umpan_balik
 * @property string|null $diagnosis_akhir_balik
 * @property string|null $resume_umpan_balik
 * @property string|null $anjuran
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Ibu $ibu
 * @method static \Database\Factories\RujukanFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rujukan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rujukan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rujukan query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rujukan whereAnjuran($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rujukan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rujukan whereDiagnosisAkhirBalik($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rujukan whereIdIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rujukan whereIdRujukan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rujukan whereResumeUmpanBalik($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rujukan whereRujukan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rujukan whereTanggalUmpanBalik($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rujukan whereUpdatedAt($value)
 */
	class Rujukan extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_rujukan_anak
 * @property int $id_anak
 * @property string|null $tanggal
 * @property string|null $dirujuk_ke
 * @property string|null $sebab_dirujuk
 * @property string|null $diagnosis_sementara
 * @property string|null $tindakan_sementara
 * @property string|null $nama_yang_merujuk
 * @property string|null $paraf_yang_merujuk
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @method static \Database\Factories\RujukanAnakFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RujukanAnak newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RujukanAnak newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RujukanAnak query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RujukanAnak whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RujukanAnak whereDiagnosisSementara($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RujukanAnak whereDirujukKe($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RujukanAnak whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RujukanAnak whereIdRujukanAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RujukanAnak whereNamaYangMerujuk($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RujukanAnak whereParafYangMerujuk($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RujukanAnak whereSebabDirujuk($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RujukanAnak whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RujukanAnak whereTindakanSementara($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RujukanAnak whereUpdatedAt($value)
 */
	class RujukanAnak extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_skrining_preeklampsia
 * @property int $id_ibu
 * @property string|null $kesimpulan
 * @property string|null $paraf_dokter
 * @property string|null $nama_dokter
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Ibu $ibu
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PreeklampsiaAnamnesis> $preeklampsiaAnamnesis
 * @property-read int|null $preeklampsia_anamnesis_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PreeklampsiaFisik> $preeklampsiaFisik
 * @property-read int|null $preeklampsia_fisik_count
 * @method static \Database\Factories\SkriningPreeklampsiaFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkriningPreeklampsia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkriningPreeklampsia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkriningPreeklampsia query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkriningPreeklampsia whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkriningPreeklampsia whereIdIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkriningPreeklampsia whereIdSkriningPreeklampsia($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkriningPreeklampsia whereKesimpulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkriningPreeklampsia whereNamaDokter($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkriningPreeklampsia whereParafDokter($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkriningPreeklampsia whereUpdatedAt($value)
 */
	class SkriningPreeklampsia extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_tb_u_laki
 * @property int $id_anak
 * @property float|null $tb
 * @property int|null $bulan
 * @property int|null $tahun
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @method static \Database\Factories\TbULakiFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TbULaki newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TbULaki newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TbULaki query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TbULaki whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TbULaki whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TbULaki whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TbULaki whereIdTbULaki($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TbULaki whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TbULaki whereTb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TbULaki whereUpdatedAt($value)
 */
	class TbULaki extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_tb_u_perempuan
 * @property int $id_anak
 * @property float|null $tb
 * @property int|null $bulan
 * @property int|null $tahun
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Anak $anak
 * @method static \Database\Factories\TbUPerempuanFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TbUPerempuan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TbUPerempuan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TbUPerempuan query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TbUPerempuan whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TbUPerempuan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TbUPerempuan whereIdAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TbUPerempuan whereIdTbUPerempuan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TbUPerempuan whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TbUPerempuan whereTb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TbUPerempuan whereUpdatedAt($value)
 */
	class TbUPerempuan extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_umur_kapsul_anak
 * @property string $umur
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\KapsulAnak> $kapsulAnak
 * @property-read int|null $kapsul_anak_count
 * @method static \Database\Factories\UmurKapsulAnakFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UmurKapsulAnak newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UmurKapsulAnak newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UmurKapsulAnak query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UmurKapsulAnak whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UmurKapsulAnak whereIdUmurKapsulAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UmurKapsulAnak whereUmur($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UmurKapsulAnak whereUpdatedAt($value)
 */
	class UmurKapsulAnak extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_umur_nasihat_anak
 * @property string|null $umur
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\NasihatAnak> $nasihatAnak
 * @property-read int|null $nasihat_anak_count
 * @method static \Database\Factories\UmurNasihatAnakFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UmurNasihatAnak newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UmurNasihatAnak newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UmurNasihatAnak query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UmurNasihatAnak whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UmurNasihatAnak whereIdUmurNasihatAnak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UmurNasihatAnak whereUmur($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UmurNasihatAnak whereUpdatedAt($value)
 */
	class UmurNasihatAnak extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_umur_sdidtk
 * @property string $umur
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PelayananSdidtk> $pelayananSdidtk
 * @property-read int|null $pelayanan_sdidtk_count
 * @method static \Database\Factories\UmurSdidtkFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UmurSdidtk newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UmurSdidtk newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UmurSdidtk query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UmurSdidtk whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UmurSdidtk whereIdUmurSdidtk($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UmurSdidtk whereUmur($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UmurSdidtk whereUpdatedAt($value)
 */
	class UmurSdidtk extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_user
 * @property string|null $name
 * @property string|null $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $password
 * @property string|null $remember_token
 * @property int $id_role
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Ibu> $ibu
 * @property-read int|null $ibu_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereIdRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereIdUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_usg_tri1
 * @property int $id_pemeriksaan_trimester1
 * @property string|null $hpht
 * @property int|null $usia_kehamilan
 * @property float|null $gestational_sac
 * @property float|null $crown_rump_length
 * @property int|null $denyut_jantung_janin
 * @property int|null $sesuai_usia_kehamilan
 * @property string|null $letak_janin
 * @property string|null $taksiran_persalinan
 * @property string|null $hasil_usg
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PemeriksaanTrimester1 $pemeriksaanTrimester1
 * @method static \Database\Factories\UsgTri1Factory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri1 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri1 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri1 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri1 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri1 whereCrownRumpLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri1 whereDenyutJantungJanin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri1 whereGestationalSac($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri1 whereHasilUsg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri1 whereHpht($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri1 whereIdPemeriksaanTrimester1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri1 whereIdUsgTri1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri1 whereLetakJanin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri1 whereSesuaiUsiaKehamilan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri1 whereTaksiranPersalinan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri1 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri1 whereUsiaKehamilan($value)
 */
	class UsgTri1 extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_usg_tri3
 * @property int $id_pemeriksaan_trimester3
 * @property string|null $hpht
 * @property int|null $kehamilan
 * @property string|null $janin
 * @property float|null $bpd
 * @property string|null $jumlah_janin
 * @property float|null $hc
 * @property string|null $letak_janin
 * @property float|null $berat_janin
 * @property float|null $fl
 * @property string|null $plasenta
 * @property float|null $cairan_ketuban
 * @property int|null $usia_kehamilan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PemeriksaanTrimester3 $pemeriksaanTrimester3
 * @method static \Database\Factories\UsgTri3Factory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri3 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri3 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri3 query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri3 whereBeratJanin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri3 whereBpd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri3 whereCairanKetuban($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri3 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri3 whereFl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri3 whereHc($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri3 whereHpht($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri3 whereIdPemeriksaanTrimester3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri3 whereIdUsgTri3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri3 whereJanin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri3 whereJumlahJanin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri3 whereKehamilan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri3 whereLetakJanin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri3 wherePlasenta($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri3 whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UsgTri3 whereUsiaKehamilan($value)
 */
	class UsgTri3 extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_vaksin
 * @property string|null $vaksin
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Imunisasi> $imunisasi
 * @property-read int|null $imunisasi_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vaksin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vaksin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vaksin query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vaksin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vaksin whereIdVaksin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vaksin whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vaksin whereVaksin($value)
 */
	class Vaksin extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id_wali
 * @property int $id_user
 * @property string|null $nama
 * @property string|null $nik
 * @property string|null $tmpt_lahir
 * @property string|null $tgl_lahir
 * @property string|null $gol_darah
 * @property string|null $jenis_pelayanan
 * @property string|null $no_asuransi
 * @property string|null $tgl_berlaku_asuransi
 * @property string|null $fasilitas_pelayanan_kesehatan
 * @property string|null $no_reg_kohort_bayi
 * @property string|null $no_reg_kohort_balita
 * @property string|null $no_catatan_medik_rs
 * @property string|null $pendidikan
 * @property string|null $pekerjaan
 * @property string|null $provinsi
 * @property string|null $kabupaten
 * @property string|null $alamat
 * @property string|null $telepon
 * @property string|null $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Anak> $anak
 * @property-read int|null $anak_count
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\WaliFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali whereFasilitasPelayananKesehatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali whereGolDarah($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali whereIdUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali whereIdWali($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali whereJenisPelayanan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali whereKabupaten($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali whereNik($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali whereNoAsuransi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali whereNoCatatanMedikRs($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali whereNoRegKohortBalita($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali whereNoRegKohortBayi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali wherePekerjaan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali wherePendidikan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali whereProvinsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali whereTelepon($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali whereTglBerlakuAsuransi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali whereTglLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali whereTmptLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wali whereUpdatedAt($value)
 */
	class Wali extends \Eloquent {}
}

