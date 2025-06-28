import os
import shutil

SOURCE_DIR = 'app/Models_full'
TARGET_DIR = 'app/Models'

related_models = [
    'Anak',

    # 'Wali',
    # 'BayiBaruLahir',
    # 'Bayi',
    # 'AnakBalita',
    # 'KeteranganLahir',

    # 'RiwayatKelahiran',
    # 'PelayananKesehatanNeonatus',
    # 'Imunisasi',
    # 'PemantauanKia',
    # 'PelayananSdidtk',

    # 'NasihatAnak',
    # 'KapsulAnak',
    # 'KmsPerempuan',
    # 'BbUPerempuan',
    # 'TbUPerempuan',

    # 'BbTbPerempuan',
    # 'LingkarKepalaPerempuan',
    # 'KmsLaki',
    # 'BbULaki',
    # 'TbULaki',

    # 'BbTbLaki',
    # 'LingkarKepalaLaki',
    # 'ImtPerempuan',
    # 'ImtLaki',
    # 'KesehatanGigi',
    # 'RingkasanMtbs',

    # 'RingkasanPelayananDokter',
    # 'RujukanAnak',
]

os.makedirs(TARGET_DIR, exist_ok=True)

for model in related_models:
    source_file = os.path.join(SOURCE_DIR, f'{model}.php')
    target_file = os.path.join(TARGET_DIR, f'{model}.php')

    if os.path.exists(source_file):
        shutil.copy2(source_file, target_file)
        print(f'✔ Copied {model}.php')
    else:
        print(f'⚠ File tidak ditemukan: {model}.php')
