<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationPersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_person', function (Blueprint $table) {
            $table->integer('organization_id')->unsigned();
            $table->integer('person_id')->unsigned();
            $table->timestamps();

            $table->primary(['organization_id', 'person_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('organization_person');
    }
}
