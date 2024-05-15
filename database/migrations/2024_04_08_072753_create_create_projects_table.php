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
        Schema::create('create_projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_title')->nullable();
            $table->unsignedBigInteger('proj_category');
            $table->string('Industry')->nullable();
            $table->string('search_tags')->nullable();
            $table->string('skills_required')->nullable();
            $table->string('location')->nullable();
            $table->string('proj_start_date')->nullable();
            $table->string('proj_end_date')->nullable();
            $table->string('reference_url')->nullable();
            $table->string('budget_range')->nullable();
            $table->string('funding')->nullable();
            $table->string('project_overview')->nullable();
            $table->string('proj_bid_start')->nullable();
            $table->string('proj_bid_end')->nullable();
            $table->string('buy_now_price')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('proj_category')->references('id')->on('expert_categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('create_projects');
    }
};
