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
        Schema::create('shift_master_dailies', function (Blueprint $table) {
            $table->id();
            $table->string('week_day')->nullable();
            $table->string('shift_name')->nullable();
            $table->string('time_zone')->nullable();
            $table->string('Shift_in')->nullable();
            $table->string('Shift_out')->nullable();
            $table->string('Lunch_in')->nullable();
            $table->string('Lunch_out')->nullable();
            //
            $table->string('ded_full_lunch_hrs')->nullable();
            $table->string('extraday_hrs')->nullable();
            $table->string('Send_sms_delay')->nullable();
            //
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('comapny_id');
            $table->foreign('comapny_id')->references('id')->on('companies')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shift_master_dailies');
    }
};
