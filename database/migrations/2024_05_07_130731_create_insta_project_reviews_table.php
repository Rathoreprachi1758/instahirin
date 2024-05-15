<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('insta_project_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies');
            $table->string('scope_work');
            $table->string('company_review_comment')->nullable();
            $table->string('quality_deliverable_rating')->nullable();
            $table->string('cost_value_rating')->nullable();
            $table->string('time_lines_marketing_rating')->nullable();
            $table->string('over_all_rating')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insta_project_reviews');
    }
};
