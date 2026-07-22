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
        Schema::create('companies', function (Blueprint $table) {
            $table->comment('Contains Company info including login info.');
            $table->smallIncrements('id');
            $table->string('company_code', 30)->unique('company_unique')->comment('Company Code');
            $table->string('address', 100)->nullable()->comment('Company Address');
            $table->string('name', 50)->comment('Company Name');
            $table->string('pass_code', 15)->nullable();
            $table->string('phone', 20)->nullable()->comment('Company Phone Number');
            $table->date('active_start_date')->nullable()->comment('Active Start Date');
            $table->date('active_end_date')->nullable()->comment('Account End Date');
            $table->string('contact_person', 30)->nullable()->comment('Contact Person in the company');
            $table->string('email', 60)->nullable()->comment('Company Email');
            $table->date('account_signup_date')->nullable()->comment('When the company signed up for the app.');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
