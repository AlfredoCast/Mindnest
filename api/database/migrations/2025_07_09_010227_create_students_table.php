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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->string('student_code', 50)->unique();
            $table->date('registration_date');
            $table->string('status')->default('active'); // active, inactive, suspended
            $table->boolean('scholarship')->default(false);
            $table->string('photo', 255)->nullable();
            $table->text('notes')->nullable();
            $table->timestamp('last_activity')->nullable();
            $table->unsignedInteger('total_courses_completed')->default(0);
            $table->unsignedInteger('total_time_watched')->default(0);
            $table->unsignedInteger('certificates_obtained')->default(0);
            $table->boolean('notifications_enabled')->default(true);
            $table->boolean('manual_verification')->default(false);
            $table->decimal('average_grade', 4, 2)->default(0.00);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
