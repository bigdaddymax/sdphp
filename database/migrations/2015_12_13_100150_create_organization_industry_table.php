<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationIndustryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_industry', function (Blueprint $table) {
            $table->integer('organization_id')->unsigned();
            $table->integer('industry_id')->unsigned();
            $table->tinyInteger('primary');
            $table->timestamps();

            $table->primary(['organization_id', 'industry_id']);

            $table->foreign('organization_id')
            ->references('id')->on('organizations')
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
        Schema::drop('organization_industry');
    }
}
