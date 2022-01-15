<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        author::create([
            'name' => 'sumanto',
            'email' => 'sumanto123@gmail.com',
            'password' => bcrypt('qwerty@1234'),
            'is_admin' => true,
            'remember_token' => Str::random(10),
        ]);

        author::factory(5)->create();
    }
}
