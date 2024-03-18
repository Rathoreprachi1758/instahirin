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
        Schema::create('employ_interviews', function (Blueprint $table) {
            $table->id();
            $table->string('position_title')->nullable();
            $table->string('company_name')->nullable();
            $table->string('email')->nullable();
            $table->string('location')->nullable();
            $table->string('work_mode')->nullable(); 
            $table->string('avail_date')->nullable();
            $table->string('avail_from')->nullable();
            $table->string('avail_to')->nullable(); 
            //
            $table->string('meeting_link')->nullable(); 
            $table->timestamp('expiration_date')->nullable();
            //
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('hire_me_application_id');
            $table->foreign('hire_me_application_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employ_interviews');
    }
};
