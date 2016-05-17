<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('task_type_id')->unsigned();
            $table->integer('task_role_type_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('fund_id')->unsigned()->nullable();
            $table->integer('client_id')->unsigned()->nullable();
            $table->dateTime('due_date');
            $table->dateTime('target_date')->nullable();
            $table->tinyInteger('active');
            $table->tinyInteger('canceled');
            $table->integer('task_canceled_type_id')->unsigned()->nullable();
            $table->integer('predecessor_task_id')->unsigned()->nullable();
            $table->integer('successor_task_id')->unsigned()->nullable();
            $table->integer('assignment_id')->unsigned()->nullable();
            $table->integer('completed_by')->unsigned()->nullable();
            $table->dateTime('completed_at')->nullable();
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
        Schema::drop('tasks');
    }
}
