<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Project;
use App\Models\Member; // <-- IMPORT MODEL MEMBER
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@robotech.com',
        ]);
        
        Post::factory(15)->create();
        Project::factory(12)->create();
        Member::factory(20)->create(); // <-- TAMBAHKAN INI (membuat 20 data anggota)
    }
}