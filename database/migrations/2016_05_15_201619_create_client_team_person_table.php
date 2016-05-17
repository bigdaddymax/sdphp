<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTeamPersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_team_person', function (Blueprint $table) {
            $table->integer('client_team_id')->unsigned();
            $table->integer('person_id')->unsigned();
            $table->timestamps();

            $table->primary(['client_team_id', 'person_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('client_team_person');
    }
}
