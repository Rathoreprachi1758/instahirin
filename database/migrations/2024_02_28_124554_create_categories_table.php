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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_name')->nullable();
            $table->string('early_arrival_allow')->nullable();
            $table->string('Max_time_to allow')->nullable();
            $table->string('OT_half_From')->nullable();
            $table->string('OT_half_To')->nullable();
            $table->string('OT_full_from')->nullable();
            $table->string('OT_full_To')->nullable();    
            //
            $table->string('Apply_OT_for')->nullable();
            $table->string('Late_arraival_allow')->nullable();
            $table->string('Early_depature_allow')->nullable();
            //
            $table->string('early_arraival_ignore')->nullable();
            $table->string('Late_depature_ignore')->nullable();
            $table->string('OT_ignore')->nullable();  
            $table->string('select_no_of_late')->nullable();
            $table->string('Late_action')->nullable();
            $table->string('halfday_if_late_hours_greater_than')->nullable();
            //
            $table->string('halfday_if_Work_hours_less_than')->nullable();
            $table->string('absent_if_work_hours_greater_than')->nullable();
            $table->string('absent_if_Work_hours_less_than')->nullable();
            $table->string('shift_hours_for _OT_calculation')->nullable();
            //     
            $table->string('OT_payment_multiplyaer')->nullable();
            $table->string('WO_Lapse_on_previous_and_next_absent')->nullable();
            //
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('comapny_id');
            $table->foreign('comapny_id')->references('id')->on('companies')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
