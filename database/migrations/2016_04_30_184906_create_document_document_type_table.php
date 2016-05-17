<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentDocumentTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_document_type', function (Blueprint $table) {
          $table->integer('document_id')->unsigned();
          $table->integer('document_type_id')->unsigned();
          $table->timestamps();

          $table->primary(['document_id', 'document_type_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('document_document_type');
    }
}
