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
            'slug' => 'kriminal',
        ]);

        Category::create([
            'name' => 'Bencana',
            'slug' => 'bencana',
        ]);

        Category::create([
            'name' => 'Politik',
            'slug' => 'politik',
        ]);
    }
}
