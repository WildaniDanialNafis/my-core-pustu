<?php

function extractPublicMethods(string $code): array {
    preg_match_all('/public function (\w+)/', $code, $matches);
    return $matches[1] ?? [];
}

function parseClassFile(string $file, array $baseMethodsMap): ?array {
    $code = file_get_contents($file);
    if (str_contains($code, 'return new class')) return null;

    preg_match('/class\s+(\w+)(?:\s+extends\s+(\w+))?/', $code, $match);
    if (empty($match[1])) return null;

    $className = $match[1];
    $parentName = $match[2] ?? null;
    $methods = extractPublicMethods($code);

    if ($parentName && isset($baseMethodsMap[$parentName])) {
        $methods = array_merge($methods, $baseMethodsMap[$parentName]);
    }

    return [$className, $parentName, $methods];
}

// Ambil metode dari BaseCrudController
$basePath = 'app/Http/Controllers/BaseCrudController.php';
$baseMethodsMap = [];

if (file_exists($basePath)) {
    $baseCode = file_get_contents($basePath);
    $baseMethodsMap['BaseCrudController'] = extractPublicMethods($baseCode);
}

// Kumpulkan semua class hasil parsing
$parsedClasses = [];

$rii = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator('app/Http/Controllers')
);

foreach ($rii as $file) {
    if (!$file->isFile() || $file->getExtension() !== 'php') continue;
    if (str_contains($file->getFilename(), 'BaseCrudController')) continue;

    $result = parseClassFile($file->getPathname(), $baseMethodsMap);
    if (!$result) continue;

    $parsedClasses[] = $result;
}

// Bagi per 5 class dan keluarkan ke diagram PlantUML
$chunks = array_chunk($parsedClasses, 5);
foreach ($chunks as $i => $chunk) {
    $filename = "diagram_" . ($i + 1) . ".puml";
    file_put_contents($filename, "@startuml\n\n");

    foreach ($chunk as [$class, $parent, $methods]) {
        $str = "class $class";
        if ($parent) $str .= " extends $parent";
        $str .= " {\n";
        foreach ($methods as $method) {
            $str .= "  +$method()\n";
        }
        $str .= "}\n\n";
        file_put_contents($filename, $str, FILE_APPEND);
    }

    file_put_contents($filename, "@enduml\n", FILE_APPEND);
}
