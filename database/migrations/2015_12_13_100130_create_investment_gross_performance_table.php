<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestmentGrossPerformanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investment_gross_performance', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('investment_id')->unsigned();
            //$table->integer('import_id')->unsigned();
            $table->string('currency');
            $table->date('entry_date');
            $table->date('exit_date')->nullable();
            $table->tinyInteger('exited');
            $table->decimal('invested_capital', 20, 6);
            $table->decimal('realized_value', 20, 6);
            $table->decimal('unrealized_value', 20, 6);
            $table->decimal('cost_basis', 20, 6);
            $table->decimal('gross_irr', 20, 10);
            $table->date('report_date');
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
        Schema::drop('investment_gross_performance');
    }
}
