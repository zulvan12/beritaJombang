<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Kriminal',
            'en_name' => 'criminal',
            'slug' => 'kriminal',
        ]);

        Category::create([
            'name' => 'Bencana Alam',
            'en_name' => 'natural disaster',
            'slug' => 'bencana-alam',
        ]);

        Category::create([
            'name' => 'Politik',
            'en_name' => 'politic',
            'slug' => 'politik',
        ]);

        Category::create([
            'name' => 'Kebakaran',
            'en_name' => 'wildfire',
            'slug' => 'kebakaran',
        ]);

        Category::create([
            'name' => 'Gempa',
            'en_name' => 'earthquake',
            'slug' => 'gempa',
        ]);

        Category::create([
            'name' => 'Pemanasan Global',
            'en_name' => 'global warming',
            'slug' => 'pemanasan-global',
        ]);
    }
}
