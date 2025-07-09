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
        Schema::create('send_task', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('task_id')->nullable();
            $table->unsignedBigInteger('student_id')->nullable();
            $table->string('submitted_file', 255)->nullable();
            $table->text('comment')->nullable();
            $table->timestamps('submitted_at')->nullable();
            $table->string('status')->default('pending'); 
            $table->text('feedback')->nullable();
            $table->unsignedInteger('attempt')->default(1);
            $table->boolean('late')->default(false);
            $table->string('response_file', 255)->nullable();
            $table->unsignedInteger('version')->default(1);            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('send_task');
    }
};
