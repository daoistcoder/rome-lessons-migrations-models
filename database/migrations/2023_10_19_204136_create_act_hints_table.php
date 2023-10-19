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
        Schema::create('act_hints', function (Blueprint $table) {
            $table->id();
            $table->text('first_hint');
            $table->text('second_hint');
            $table->text('third_hint');
            $table->text('technical_hint');
            $table->text('growth_mindset_hint');

            $table->unsignedBigInteger('act_question_id')->nullable();
            $table->foreign('act_question_id')
                ->references('id')
                ->on('act_questions')
                ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('act_hints');
    }
};
