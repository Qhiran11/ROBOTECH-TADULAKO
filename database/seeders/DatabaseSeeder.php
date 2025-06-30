<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Project; // <-- IMPORT MODEL PROJECT
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus data lama dan panggil factory di sini
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@robotech.com',
        ]);
        
        Post::factory(15)->create();
        Project::factory(12)->create(); // <-- TAMBAHKAN INI (membuat 12 data proyek)
    }
}