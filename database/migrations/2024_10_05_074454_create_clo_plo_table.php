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
        Schema::create('clo_plo', function (Blueprint $table) {
            $table->id('plo_clo_id');
            $table->foreignId('plo_id')->constrained('master_p_l_o_s', 'plo_id')->onDelete('cascade');
            $table->foreignId('clo_id')->constrained('master_c_l_o_s', 'clo_id')->onDelete('cascade');
            $table->timestamps();
        });
    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clo_plo');
    }
};
