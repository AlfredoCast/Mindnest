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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('professor_code', 50)->unique();
            $table->date('registration_date');
            $table->text('biography')->nullable();
            $table->string('specialty', 100);
            $table->unsigedInteger('years_experience');
            $table->string('website', 255)->nullable();
            $table->text('social_links')->nullable();
            $table->string('cover_photo', 255)->nullable();
            $table->string('status')->default('contracted'); // active, inactive, suspended
            $table->decimal('salary', 10, 2)->default(0.00);
            $table->unsignedInteger('total_students')->default(0);
            $table->decimal('average_rating', 3, 2)->default(0.00);
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
