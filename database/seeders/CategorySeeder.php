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
            'name' => 'Bencana',
            'en_name' => 'natural disaster',
            'slug' => 'bencana',
        ]);

        Category::create([
            'name' => 'Politik',
            'en_name' => 'politic',
            'slug' => 'politik',
        ]);
    }
}
