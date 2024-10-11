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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id('nilai_id');
            $table->foreignId('mahasiswa_id')->constrained('master_mahasiswas', 'mahasiswa_id')->onDelete('cascade'); //Relation to Mahasiswa
            $table->foreignId('question'); //Relation to Question
            $table->float('point');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilais');
    }
};
