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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150)->unique();
            $table->text('description')->nullable();
            $table->unsignedInteger('duration')->default(0); 
            $table->string('level')->default('beginner'); 
            $table->decimal('monthly_price', 8, 2)->default(0.00); 
            $table->decimal('full_price', 8, 2)->default(0.00); 
            $table->string('status')->default('active');
            $table->uuid('uuid')->unique(); 
            $table->timestamps('published_at')->nullable(); 
            $table->timestamps();
            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
