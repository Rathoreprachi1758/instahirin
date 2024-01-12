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
            $table->string('Company_Name');
            $table->unsignedBigInteger('User_id');
            $table->foreign('User_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('Licence_number');
            $table->date('Date_incorporation');
            $table->string('Place_incorporation');
            $table->string('Company_address_line1');
            $table->string('Company_address_line2');
            $table->string('beneficiary_owner');
            $table->string('nationality');
            $table->string('tax_identification_number');
            $table->string('sanctionedcountries');
            $table->string('subsidiary_office_sanctioned_Country');
            $table->string('any_service_provided_in_sactioned_country');
            $table->string('Scanned_passport');
            $table->string('scanned_Id');
            $table->string('resident_citizen');
            $table->string('address_proof_copy');
            $table->string('Trade_licence');
            $table->string('other_doc');
            $table->string('FATCA');
            $table->string('w_8BEN_form');
            $table->string('customer_compliance');
            $table->string('agrement_checkbox');
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
