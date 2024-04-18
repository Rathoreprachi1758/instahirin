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
        Schema::create('company_kyc_information', function (Blueprint $table) {
            $table->id();
            $table->string('Company_Name')->nullable();
            $table->unsignedBigInteger('User_id');
            $table->foreign('User_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('Licence_number')->nullable();
            $table->date('Date_incorporation')->nullable();
            $table->string('Place_incorporation')->nullable();
            $table->string('Company_address_line1')->nullable();
            $table->string('Company_address_line2')->nullable();
            $table->string('beneficiary_owner')->nullable();
            $table->string('nationality');
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('kyc_for');
            $table->string('passport_id_no')->nullable();
            $table->string('p_o_Box')->nullable();
            $table->string('complete_address')->nullable();
            $table->date('dob')->nullable();
            $table->date('date_id_passport')->nullable();
            $table->string('tax_identification_number')->nullable();
            $table->string('sanctionedcountries');
            $table->string('subsidiary_office_sanctioned_Country');
            $table->string('any_service_provided_in_sactioned_country');
            $table->string('Scanned_passport')->nullable();
            $table->string('scanned_Id')->nullable();
            $table->string('resident_citizen')->nullable();
            $table->string('address_proof_copy')->nullable();
            $table->string('Trade_licence')->nullable();
            $table->string('other_doc')->nullable();
            $table->string('FATCA')->nullable();
            $table->string('w_8BEN_form')->nullable();
            $table->string('customer_compliance')->nullable();
            $table->string('agrement_checkbox')->nullable();
            $table->string('back_side_copy')->nullable();
            $table->string('is_approved')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_kyc_information');
    }
};
