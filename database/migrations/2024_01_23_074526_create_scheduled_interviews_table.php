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
        Schema::create('scheduled_interviews', function (Blueprint $table) {
            $table->id();
            $table->string('candidate_name')->nullable();
            $table->string('candidate_email')->nullable();
            $table->string('candidate_location')->nullable();
            $table->string('current_title')->nullable();
            $table->string('experience_year')->nullable();
            $table->string('Meeting_link')->nullable();
            $table->string('interviewr')->nullable();
            $table->string('interview_co_ordinator')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scheduled_interviews');
    }
};
