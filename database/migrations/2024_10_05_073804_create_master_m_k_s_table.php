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
        Schema::create('master_m_k_s', function (Blueprint $table) {
            $table->id('mk_id');
            // $table->foreignId('plo_clo_id')->constrained('clo_plo', 'plo_clo_id')->onDelete('cascade');
            $table->integer('nomor_mk');
            $table->string('kode_mk');
            $table->integer('tingkat_mk');
            $table->integer('semester');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_m_k_s');
    }
};
