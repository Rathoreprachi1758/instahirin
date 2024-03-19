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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id(); 
            $table->string('title'); 
            $table->string('description'); 
            $table->string('status')->default('Open'); 
            //
            $table->string('location')->nullable(); 
            $table->string('responsibilities')->nullable(); 
            $table->string('qualification')->nullable(); 
            //
            $table->string('key_skills')->nullable(); 
            $table->string('prefer_qualification')->nullable(); 
            $table->string('we_offer')->nullable(); 
            //
            $table->string('company')->nullable(); 
            $table->string('work_mode')->nullable(); 
            $table->string('ctc')->nullable(); 
            //
            $table->string('experience')->nullable(); 
            $table->string('availability')->nullable(); 
            $table->string('ctc_currency')->nullable(); 
            //
            $table->string('min_price')->nullable(); 
            $table->string('max_price')->nullable(); 
            $table->string('salary_period')->nullable(); 
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
