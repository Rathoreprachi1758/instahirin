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
        Schema::create('agency_specialization_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained('agency_services');
            $table->string('sub_services');
            $table->string('ranges');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agency_specialization_services');
    }
};
