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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('exman_id');
            $table->text('content');
            $table->enum('question_type', ['multiple_choice', 'true_false', 'short_answer', 'essay'] );
            $table->decimal('score', 5, 2);
            $table->string('image_url', 255)->nullable();
            $table->text('explanation')->nullable();
            $table->unsignedInteger('order');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
