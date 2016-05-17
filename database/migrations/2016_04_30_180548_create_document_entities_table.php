<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentEntitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_entities', function (Blueprint $table) {
            $table->integer('document_id')->unsigned();
            $table->integer('entity_type_id')->unsigned();
            $table->integer('entity_id')->unsigned();
            $table->timestamps();

            $table->primary(['document_id', 'entity_type_id', 'entity_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('document_entities');
    }
}
