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
        Schema::create('employment_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('insta_hirin_onboards_id');
            $table->foreign('insta_hirin_onboards_id')->references('id')->on('insta_hirin_onboards');
            $table->string('positions')->nullable();
            $table->string('company_name')->nullable();
            $table->string('work_mode')->nullable();
            $table->string('notice_period')->nullable();
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('discription')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employment_histories');
    }
};
