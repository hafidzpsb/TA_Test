<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('master_mahasiswas', function (Blueprint $table) {
            $table->id('mahasiswa_id');
            $table->foreignId('kurikulum_id')->constrained('master_kurikulums', 'kurikulum_id')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('master_kurikulums', 'user_id')->onDelete('cascade');
            $table->integer('nim');
            $table->string('nama_lengkap');
            $table->string('kelas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_mahasiswas');
    }
};
