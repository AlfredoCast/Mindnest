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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('user_id');
            $table->string('title', 150);
            $table->text('description')->nullable();
            $table->decimal('duration', 5, 2)->nullable();
            $table->string('status')->default('draft'); // Using ActivityStatusEnum values
            $table->string('type')->default('quiz'); // Assuming 'quiz' is a common type
            $table->boolean('is_published')->default(false);
            $table->unsignedInteger('view_count')->default(0);
            $table->string('difficulty_level')->default('easy'); // Using ExamDifficultyLevelEnum values
            $table->unsignedInteger('max_attempts')->default(1)->nullable();
            $table->decimal('max_score', 5, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
