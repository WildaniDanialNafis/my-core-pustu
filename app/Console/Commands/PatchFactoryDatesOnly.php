<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class PatchFactoryDatesOnly extends Command
{
    protected $signature = 'patch:factory-dates';
    protected $description = 'Tambahkan tanggal_* dan *_at otomatis di semua factory';

    public function handle()
    {
        $factoryPath = base_path('database/factories');
        $files = File::allFiles($factoryPath);

        foreach ($files as $file) {
            $path = $file->getRealPath();
            $content = File::get($path);

            if (!preg_match('/return\s+\[(.*?)\];/s', $content, $match)) {
                $this->warn("Lewati (tidak cocok): " . $file->getFilename());
                continue;
            }

            $arrayBody = $match[1];
            $lines = explode("\n", $arrayBody);
            $existingFields = [];

            foreach ($lines as $line) {
                if (preg_match("/['\"](.*?)['\"]\s*=>/", $line, $fieldMatch)) {
                    $existingFields[] = $fieldMatch[1];
                }
            }

            $patches = [];
            foreach ($existingFields as $field) {
                if (in_array($field, ['created_at', 'updated_at'])) continue;

                if (preg_match('/tanggal|_at$/', $field)) {
                    $patches[] = "            '$field' => fake()->dateTimeBetween('-60 days', 'now'),";
                }
            }

            if (!in_array('created_at', $existingFields)) {
                $patches[] = "            'created_at' => now(),";
            }

            if (!in_array('updated_at', $existingFields)) {
                $patches[] = "            'updated_at' => now(),";
            }

            if (empty($patches)) {
                $this->line("✔ Tidak ada field tanggal di: " . $file->getFilename());
                continue;
            }

            $newArrayBody = rtrim($arrayBody) . "\n" . implode("\n", $patches);
            $newContent = preg_replace('/return\s+\[(.*?)\];/s', "return [\n$newArrayBody\n        ];", $content);

            File::put($path, $newContent);
            $this->info("✔ Patched: " . $file->getFilename());
        }

        $this->info("✅ Selesai patching semua factory.");
    }
}
