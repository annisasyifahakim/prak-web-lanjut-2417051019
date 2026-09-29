<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nama_kelas' => 'A'],
            ['nama_kelas' => 'B'],
            ['nama_kelas' => 'C'],
            ['nama_kelas' => 'D'],
        ];

        foreach ($data as $item) {
            Kelas::create($item);
        }
    }
}