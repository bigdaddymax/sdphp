<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('task_type_id')->unsigned();
            $table->integer('task_role_type_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('fund_id')->unsigned()->nullable();
            $table->integer('client_id')->unsigned()->nullable();
            $table->tinyInteger('active');
            $table->integer('predecessor_assignment_id')->unsigned()->nullable();
            $table->integer('successor_assignment_id')->unsigned()->nullable();
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
        Schema::drop('assignments');
    }
}
