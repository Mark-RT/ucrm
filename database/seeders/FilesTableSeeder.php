<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FilesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('files')->insert([
            [
                'file_path' => 'documents/report1.pdf',
                'file_type' => 'pdf',
                'size' => 123456,
                'date_created' => now()->toDateString(),
                'hash' => Str::random(32),
                'employee_id' => 1
            ],
            [
                'file_path' => 'images/photo2.jpg',
                'file_type' => 'jpg',
                'size' => 234567,
                'date_created' => now()->subDays(3)->toDateString(),
                'hash' => Str::random(32),
                'employee_id' => 2
            ],
            [
                'file_path' => 'scans/invoice_2025_05.png',
                'file_type' => 'png',
                'size' => 345678,
                'date_created' => now()->subWeek()->toDateString(),
                'hash' => Str::random(32),
                'employee_id' => 3
            ],
        ]);
    }
}