<?php

function extractPublicMethods(string $code): array {
    preg_match_all('/public function (\w+)/', $code, $matches);
    return $matches[1] ?? [];
}

function parseClassFile(string $file, array $baseMethodsMap): ?array {
    $code = file_get_contents($file);

    // Abaikan class anonymous
    if (str_contains($code, 'return new class')) return null;

    preg_match('/class\s+(\w+)(?:\s+extends\s+(\w+))?/', $code, $match);
    if (empty($match[1])) return null;

    $className = $match[1];
    $parentName = $match[2] ?? null;
    $methods = extractPublicMethods($code);

    // Tambahkan method dari parent jika dikenali
    if ($parentName && isset($baseMethodsMap[$parentName])) {
        $methods = array_merge($methods, $baseMethodsMap[$parentName]);
    }

    return [$className, $parentName, $methods];
}

// Ambil method dari BaseCrudController
$basePath = 'app/Http/Controllers/BaseCrudController.php';
$baseMethodsMap = [];

if (file_exists($basePath)) {
    $baseCode = file_get_contents($basePath);
    $baseMethodsMap['BaseCrudController'] = extractPublicMethods($baseCode);
}

echo "@startuml\n\n";

// Gunakan recursive scan
$rii = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator('app/Http/Controllers')
);

foreach ($rii as $file) {
    if (!$file->isFile() || $file->getExtension() !== 'php') continue;
    if (str_contains($file->getFilename(), 'BaseCrudController')) continue;

    $result = parseClassFile($file->getPathname(), $baseMethodsMap);
    if (!$result) continue;

    [$class, $parent, $methods] = $result;

    echo "class $class";
    if ($parent) echo " extends $parent";
    echo " {\n";
    foreach ($methods as $method) {
        echo "  +$method()\n";
    }
    echo "}\n\n";
}

echo "@enduml\n";
