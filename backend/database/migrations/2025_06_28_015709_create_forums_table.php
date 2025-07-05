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
        Schema::create('forums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('activity_id');
            $table->unsignedBigInteger('parent_content_id')->nullable();
            $table->string('guiding_question', 150);
            $table->text('instructions');
            $table->boolean('allow_comments')->default(true);
            $table->timestamp('closing_date')->nullable();
            $table->unsignedInteger('coment_limint')->nullable();
            $table->unsignedInteger('reply_count')->nullable();
            $table->boolean('pinned')->nullable();
            $table->unsignedInteger('view_count');
            $table->boolean('is_published')->default(true);
            $table->boolean('allow_anonymous')->default(false);
            $table->timestamps();
            $table->softDeletes();
            
            // Foreign key constraint for self-referencing relationship
            $table->foreign('parent_content_id')->references('id')->on('forums')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forums');
    }
};
