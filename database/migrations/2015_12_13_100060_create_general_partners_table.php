<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralPartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_partners', function (Blueprint $table) {
            $table->integer('organization_id')->unsigned()->unique();
            $table->integer('strategy_id')->unsigned();
            $table->decimal('aum', 20, 6);
            $table->date('aum_date');
            $table->string('aum_currency');
            $table->timestamps();

            $table->primary('organization_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('general_partners');
    }
}
