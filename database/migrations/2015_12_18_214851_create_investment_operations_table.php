<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestmentOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investment_operations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('investment_id')->unsigned();
            $table->integer('investment_operation_type_id')->unsigned();
            $table->date('date');
            $table->decimal('amount', 20, 6);
            $table->string('currency');
            $table->decimal('fx_rate_override', 20, 10)->nullable();
            $table->timestamps();

            $table->foreign('investment_id')
            ->references('id')->on('investments')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('investment_operations');
    }
}
