<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentFundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_funds', function (Blueprint $table) {
            $table->integer('document_id')->unsigned();
            $table->foreign('document_id')->references('id')->on('documents');
            $table->integer('fund_id')->unsigned();
            $table->foreign('fund_id')->references('portfolio_id')->on('funds');
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
        Schema::drop('document_funds');
    }
}
