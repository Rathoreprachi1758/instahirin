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
        Schema::create('agency_contractor_portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('client_website');
            $table->string('portfolio_title');
            $table->string('portfolio_service_lines');
            $table->string('portfolio_project_size');
            $table->date('portfolio_start_date')->nullable();
            $table->date('portfolio_end_date')->nullable();
            $table->string('portfolio_description');
            $table->string('videoLink')->nullable();
            $table->string('imageUpload')->nullable();
            $table->boolean('privacy');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agency_contractor_portfolios');
    }
};
