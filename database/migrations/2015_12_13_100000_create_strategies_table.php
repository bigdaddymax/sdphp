<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStrategiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strategies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('asset_class');
            $table->string('sector');
            $table->string('sub_sector');
            $table->smallInteger('asset_class_sort_order');
            $table->smallInteger('sector_sort_order');
            $table->smallInteger('sub_sector_sort_order');
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
        Schema::drop('strategies');
    }
}
