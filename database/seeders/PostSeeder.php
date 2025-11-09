<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\Writer;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class PostSeeder extends Seeder {
    public function run() {
        $faker = Faker::create('id_ID');
        $categories = Category::all();
        $writers = Writer::all();

        // Create 6 posts (for popular pagination)
        for ($i = 1; $i <= 6; $i++) {
            $cat = $categories->random();
            $writer = $writers->random();
            $title = $faker->sentence(6);
            Post::create([
                'category_id' => $cat->id,
                'writer_id' => $writer->id,
                'title' => $title,
                'slug' => Str::slug($title) . '-' . time() . '-' . $i,
                'excerpt' => $faker->paragraph(2),
                'content' => $faker->paragraphs(6, true),
                'image' => 'https://picsum.photos/seed/' . ($i+10) . '/800/450',
                'published_at' => $faker->dateTimeBetween('-2 months', 'now'),
                'views' => $faker->numberBetween(0, 500),
            ]);
        }
    }
}
