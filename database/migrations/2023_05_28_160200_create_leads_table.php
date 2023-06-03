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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('phone')->nullable(true);
            $table->string('hiring_type')->nullable(true);
            $table->string('budget')->nullable(true);
            $table->string('lead_type')->nullable(false)->default('Consultation');
            $table->text('details')->nullable(true);
            $table->string('document')->nullable(true);
            $table->string('status')->nullable(true)->default('New');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
