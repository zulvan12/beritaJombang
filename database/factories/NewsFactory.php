<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => mt_rand(1,6),
            'author_id' => mt_rand(1,6),
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            // 'body' => collect($this->faker->paragraphs(mt_rand(5,10)))    ->map(function($p){ return "<p>$p</p>";})->implode(''),
            'body' => '<p>'. implode('</p><p>',$this->faker->paragraphs(mt_rand(5,10))).'</p>',
            'published_at' => now(),
        ];
    }
}
