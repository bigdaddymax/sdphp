<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioIndustryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_industry', function (Blueprint $table) {
          $table->integer('portfolio_id')->unsigned();
          $table->integer('industry_id')->unsigned();
          $table->tinyInteger('primary');
          $table->timestamps();

          $table->primary(['portfolio_id', 'industry_id']);

          $table->foreign('portfolio_id')
          ->references('id')->on('portfolios')
          ->onDelete('cascade')->onUpdate('cascade');

          $table->foreign('industry_id')
          ->references('id')->on('industries')
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
        Schema::drop('portfolio_industry');
    }
}
