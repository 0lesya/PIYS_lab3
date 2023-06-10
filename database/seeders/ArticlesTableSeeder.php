<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticlesTableSeeder extends Seeder
{

    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i<50; $i++){
            Article::create([
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
                'author' => $faker->name,
            ]);
        }
    }
}
