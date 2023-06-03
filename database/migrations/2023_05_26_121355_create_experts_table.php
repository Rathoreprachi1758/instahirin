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
        Schema::create('experts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sub_title');
            $table->string('availability');
            $table->string('experience');
            $table->string('avatar');
            $table->string('resume')->nullable(true);
            $table->boolean('published')->nullable(true)->default(0);
            $table->string('status')->nullable(true)->default('new');
            $table->integer('expert_category_id')->nullable(true);
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exports');
    }
};
