<?php

$directory = new RecursiveDirectoryIterator('app/Http/Controllers');
$iterator = new RecursiveIteratorIterator($directory);
$regex = new RegexIterator($iterator, '/^.+\.php$/i', RecursiveRegexIterator::GET_MATCH);

$puml = "@startuml\n\n";

foreach ($regex as $files) {
    foreach ($files as $file) {
        $content = file_get_contents($file);

        if (preg_match('/class\s+(\w+)(?:\s+extends\s+(\w+))?/', $content, $match)) {
            $class = $match[1];
            $parent = $match[2] ?? null;

            $puml .= "class {$class}";
            if ($parent) $puml .= " extends {$parent}";
            $puml .= " {\n";

            if (preg_match_all('/public function (\w+)/', $content, $methods)) {
                foreach ($methods[1] as $method) {
                    $puml .= "  +{$method}()\n";
                }
            }

            $puml .= "}\n\n";
        }
    }
}

$puml .= "@enduml\n";

file_put_contents('controller-class-diagram.puml', $puml);

echo "Generated: controller-class-diagram.puml\n";
