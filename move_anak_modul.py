import os
import re

# === KONFIGURASI ===
MODEL_ROOT = 'app/Models'
TARGET_DIR = 'app/Models/AnakModul'
NAMESPACE_TARGET = 'App\\\\Models\\\\AnakModul'

# Buat folder jika belum ada
os.makedirs(TARGET_DIR, exist_ok=True)

# Semua model relasi dari Anak
related_models = set([
    'Anak',
    'Wali',
    'BayiBaruLahir',
    'Bayi',
    'AnakBalita',
    'KeteranganLahir',
    'RiwayatKelahiran',
    'PelayananKesehatanNeonatus',
    'Imunisasi',
    'PemantauanKia',
    'PelayananSdidtk',
    'NasihatAnak',
    'KapsulAnak',
    'KmsPerempuan',
    'BbUPerempuan',
    'TbUPerempuan',
    'BbTbPerempuan',
    'LingkarKepalaPerempuan',
    'KmsLaki',
    'BbULaki',
    'TbULaki',
    'BbTbLaki',
    'LingkarKepalaLaki',
    'ImtPerempuan',
    'ImtLaki',
    'KesehatanGigi',
    'RingkasanMtbs',
    'RingkasanPelayananDokter',
    'RujukanAnak',
])

def update_file_namespace_and_refs(filepath, target_path):
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()

    # Ganti namespace
    content = re.sub(r'namespace\s+App\\\\Models;', f'namespace {NAMESPACE_TARGET};', content)

    # Ganti semua relasi seperti Model::class
    for model in related_models:
        # Harus escape \ dalam replacement string
        replacement = f'\\\\{NAMESPACE_TARGET}\\\\{model}::class'
        pattern = rf'(?<![\\\w]){model}::class'
        content = re.sub(pattern, replacement, content)

    with open(target_path, 'w', encoding='utf-8') as f:
        f.write(content)
    print(f'✔ Copied & updated: {target_path}')

def copy_model(model_name):
    source_file = os.path.join(MODEL_ROOT, f'{model_name}.php')
    target_file = os.path.join(TARGET_DIR, f'{model_name}.php')

    if not os.path.exists(source_file):
        print(f'⚠ File tidak ditemukan: {source_file}')
        return

    update_file_namespace_and_refs(source_file, target_file)

# Proses semua model
for model in related_models:
    copy_model(model)
