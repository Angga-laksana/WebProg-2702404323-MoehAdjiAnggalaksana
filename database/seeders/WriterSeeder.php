<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder {
    public function run() {
        Writer::create([
            'name' => 'Bia Mecca Annisa',
            'specialty' => 'Data Science',
            'bio' => 'Spesialis Data Science'
        ]);
        Writer::create([
            'name' => 'Lia Putri',
            'specialty' => 'Machine Learning',
            'bio' => 'Penulis materi Machine Learning dan Deep Learning'
        ]);
        Writer::create([
            'name' => 'Abi Firmansyah',
            'specialty' => 'Network Security',
            'bio' => 'Spesialis Network Security'
        ]);
    }
}
