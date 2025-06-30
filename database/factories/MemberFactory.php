<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'position' => fake()->randomElement(['Ketua Umum', 'Sekretaris', 'Bendahara', 'Koordinator Divisi Mekanik', 'Koordinator Divisi Programming', 'Anggota']),
            'period' => fake()->randomElement(['2024-2025', '2023-2024']),
            'major' => fake()->randomElement(['Teknik Informatika', 'Teknik Elektro', 'Teknik Mesin']),
        ];
    }
}