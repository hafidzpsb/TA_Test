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
        Schema::create('master_questions', function (Blueprint $table) {
            $table->id('question_id');
            // $table->foreignId('assessment_id'); //assessment_id
            // $table->foreignId() //Relation ke mapping clo mk
            $table->string('deskripsi_question');
            $table->float('persentase_question');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_questions');
    }
};
