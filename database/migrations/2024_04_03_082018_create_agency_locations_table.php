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
        Schema::create('agency_locations', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('city');
            $table->string('type');
            $table->string('postal_code');
            $table->string('country_code');
            $table->string('phone_number');
            $table->string('address');
            $table->string('total_employee');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agency_locations');
    }
};
