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
        Schema::create('availability_data', function (Blueprint $table) {
            $table->id();
            $table->date('availability_date');
            $table->time('availability_time_from');
            $table->time('availability_time_to');
            $table->string('availability_time_zone');
            $table->unsignedBigInteger('hire_request_id');
            $table->foreign('hire_request_id')->references('id')->on('hire_requests')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('availability_data');
    }
};
