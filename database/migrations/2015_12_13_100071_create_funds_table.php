<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funds', function (Blueprint $table) {
            $table->integer('portfolio_id')->unsigned()->unique();
            $table->string('legal_name');
            $table->integer('strategy_id')->unsigned();
            $table->integer('vintage_year');
            $table->decimal('fund_size', 20, 6);
            $table->string('fund_size_currency');
            $table->date('fund_size_date');
            $table->text('description');
            $table->string('file_name');
            $table->timestamps();

            $table->primary('portfolio_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('funds');
    }
}
