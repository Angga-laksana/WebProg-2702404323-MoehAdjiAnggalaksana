<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder {
    public function run() {
        // Adjust categories for NIM parity. Example for odd NIM:
        $cats = ['Data Science','Network Security'];
        foreach ($cats as $c) {
            Category::create(['name' => $c, 'slug' => Str::slug($c)]);
        }
    }
}
