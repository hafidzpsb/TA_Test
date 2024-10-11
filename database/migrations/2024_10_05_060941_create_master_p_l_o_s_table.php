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
        Schema::create('master_p_l_o_s', function (Blueprint $table) {
            $table->id('plo_id');
            $table->foreignId('kurikulum_id')->constrained('master_kurikulums', 'kurikulum_id')->onDelete('cascade');
            $table->integer('nomor_plo');
            $table->string('nama_plo');
            $table->timestamps();
            //Relasi

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_p_l_o_s');
    }
};
