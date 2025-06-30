<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    public function definition(): array
    {
        $title = fake()->sentence(4); // Membuat judul dari 4 kata
        return [
            'title' => $title,
            'slug' => Str::slug($title), // Membuat slug dari judul
            'body' => fake()->paragraph(10), // Membuat isi berita dari 10 paragraf
            'published_at' => now(),
        ];
    }
}