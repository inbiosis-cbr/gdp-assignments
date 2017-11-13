<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdPackageItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engage_ad_packageItems', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ad_package_id');
            $table->integer('ad_id');
            $table->integer('ad_element_id');
            $table->integer('element_quantity');
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
        Schema::dropIfExists('engage_ad_packageItems');
    }
}
