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
        Schema::create('master_assessments', function (Blueprint $table) {
            $table->id('assessment_id');
            // $table->foreignId('mk_id')->constrained('master_kompetensi', 'mk_id')->onDelete('cascade');
            $table->string('deskripsi_assessment');
            $table->float('persentase_assessment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_assessments');
    }
};
