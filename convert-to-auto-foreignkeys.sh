#!/bin/bash

FACTORY_DIR="database/factories"

echo "🔍 Membersihkan komentar..."
find "$FACTORY_DIR" -type f -name "*.php" | while read -r file; do
    sed -E '/^\s*\/\*\*/,/^\s*\*\//d' "$file" | \
    sed -E '/^\s*(\/\/|#)/d' | \
    sed -E '/^\s*$/N;/^\s*\n\s*$/D' > "$file.tmp"
    mv "$file.tmp" "$file"
done

echo "🎨 Merapikan kode dengan Laravel Pint..."
./vendor/bin/pint "$FACTORY_DIR"

echo "✅ Selesai!"
