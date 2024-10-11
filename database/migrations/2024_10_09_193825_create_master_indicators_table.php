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
        Schema::create('master_indicators', function (Blueprint $table) {
            $table->id("indicator_id");
            // $table->string('plo_id'); //Relation to PLO
            $table->string('kode_indicator');
            $table->string('deskripsi_indicator');
            $table->float('bobot_indikator');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_indicators');
    }
};
