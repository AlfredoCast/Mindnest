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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('activity_id');
            $table->text('instructions');
            $table->date('due_date')->nullable();
            $table->decimal('max_score', 8, 2)->default(0);
            $table->string('reference_file', 255)->nullable();
            $table->boolean('is_published');
            $table->boolean('allow_late_submission')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
