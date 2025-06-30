<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post; // <-- IMPORT MODEL POST
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@robotech.com',
        ]);

        // Membuat 15 data post palsu menggunakan factory
        Post::factory(15)->create();
    }
}