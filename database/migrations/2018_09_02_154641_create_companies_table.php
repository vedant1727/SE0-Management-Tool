<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_code')->unique();
            $table->string('name');
            $table->string('base_url')->nullable();
            $table->string('primary_email');
            $table->string('secondary_email')->nullable();
            $table->string('office_address')->nullable();
            $table->string('landmark')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('description')->nullable();
            $table->string('primary_contact_number');
            $table->string('secondary_contact_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
