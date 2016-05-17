<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGicsSectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gics_sectors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sector');
            $table->string('sub_sector');
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
        Schema::drop('gics_sectors');
    }
}
