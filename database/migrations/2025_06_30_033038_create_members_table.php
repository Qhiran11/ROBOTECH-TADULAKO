<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_xxxxxx_create_members_table.php

    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position'); // Contoh: "Ketua Umum", "Anggota Divisi Mekanik"
            $table->string('period'); // Periode kepengurusan, contoh: "2024-2025"
            $table->string('major')->nullable(); // Jurusan
            $table->string('photo')->nullable(); // Path untuk foto anggota
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
