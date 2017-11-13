<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_company', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->string('company_registration_number');
            $table->string('company_name');
            $table->string('company_address_1');
            $table->string('company_address_2');
            $table->string('company_gmap_coordinates');
            $table->string('company_email');
            $table->string('company_contact_number');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_company');
    }
}
