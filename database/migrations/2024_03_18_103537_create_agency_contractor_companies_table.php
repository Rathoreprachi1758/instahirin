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
        Schema::create('agency_contractor_companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('tagline');
            $table->string('logo');
            $table->date('establishment_date');
            $table->string('company_website');
            $table->string('company_email');
            $table->string('total_employee');
            $table->string('descriptions');
            $table->string('project_size');
            $table->string('currency');
            $table->string('project_rate');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agency_contractor_companies');
    }
};
