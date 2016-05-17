<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationshipClosureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relationship_closure', function (Blueprint $table) {
            $table->integer('ancestor')->unsigned();
            $table->integer('descendant')->unsigned();
            $table->integer('length')->unsigned();
            $table->timestamps();

            $table->primary(['ancestor', 'descendant', 'length']);

            $table->foreign('ancestor')
            ->references('id')->on('relationships')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('descendant')
            ->references('id')->on('relationships')
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
        Schema::drop('relationship_closure');
    }
}
