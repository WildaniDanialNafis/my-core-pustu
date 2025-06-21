#!/bin/bash

FACTORY_DIR="database/factories"

echo "🔄 Memigrasi semua factory ke AutoForeignKeys..."

find "$FACTORY_DIR" -type f -name "*.php" | while read -r file; do
    echo "➡️  Memproses: $file"

    # Ganti trait HasForeignKey -> AutoForeignKeys
    sed -i 's/HasForeignKey/AutoForeignKeys/g' "$file"

    # Hapus baris 'id_*' dari return array di definition()
    sed -i '/^[[:space:]]\{0,\}\x27id_[^:]*:.*$/d' "$file"

    # Tambahkan pembungkus withAutoForeignKeys ke return array (jika belum dibungkus)
    sed -i '/return \[/i\ \ \ \ \ \ \ \ return $this->withAutoForeignKeys([' \
           -e '/return \[/,/];/d'

done

echo "✅ Semua factory dimigrasikan ke AutoForeignKeys."
