<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestmentOperationTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investment_operation_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('group');
            $table->integer('cashflow');
            $table->smallInteger('name_sort_order');
            $table->smallInteger('group_sort_order');
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
        Schema::drop('investment_operation_types');
    }
}
