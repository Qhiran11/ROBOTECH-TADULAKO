<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    public function definition(): array
    {
        // Contoh ID video YouTube
        $youtube_ids = ['dQw4w9WgXcQ', '3JZ_D3ELwOQ', 'L_jWHffIx5E', null]; 

        return [
            'name' => 'Proyek ' . fake()->words(2, true),
            'category' => fake()->randomElement(['Line Follower', 'Robotic Arm', 'Drone', 'IoT']),
            'description' => fake()->paragraph(15),
            'year' => fake()->year(),
            'youtube_url' => fake()->randomElement($youtube_ids),
        ];
    }
}