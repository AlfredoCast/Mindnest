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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id')->nullable();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->timestamps('registered_at')->nullable();
            $table->string('status', 20)->default('pending'); // Using RegistrationStatus
            $table->decimal('final_grade', 5, 2)->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->decimal('progress', 5, 2)->default(0.00);
            $table->bollean('re_enrollment')->default(false);
            $table->text('cancellation_reason')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
