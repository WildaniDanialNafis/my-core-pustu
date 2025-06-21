#!/bin/bash

FACTORY_DIR="database/factories"

echo "🔁 Memproses semua factory untuk AutoForeignKeys..."

find "$FACTORY_DIR" -type f -name "*.php" | while read -r file; do
    if grep -q "withAutoForeignKeys" "$file"; then
        echo "✅ Lewat (sudah benar): $file"
        continue
    fi

    echo "⚙️  Memodifikasi: $file"

    awk '
    BEGIN { in_def = 0 }
    /public function definition\(\)/ { in_def = 1 }

    in_def && /return[[:space:]]*\[/ {
        print "        return $this->withAutoForeignKeys(["
        next
    }

    in_def && /^\s*\];/ {
        print "        ]);"
        in_def = 0
        next
    }

    { print }
    ' "$file" > "$file.tmp" && mv "$file.tmp" "$file"
done

echo "✅ Selesai membungkus semua return definition() dengan withAutoForeignKeys."
