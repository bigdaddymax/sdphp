<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBenchmarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benchmarks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('source');
            $table->date('date');
            $table->integer('vintage_year');
            $table->string('strategy');
            $table->string('geography');
            $table->integer('fund_count');
            $table->decimal('irr_max', 16, 10);
            $table->decimal('irr_top', 16, 10);
            $table->decimal('irr_median', 16, 10);
            $table->decimal('irr_bottom', 16, 10);
            $table->decimal('irr_min', 16, 10);
            $table->decimal('tvpi_max', 16, 6);
            $table->decimal('tvpi_top', 16, 6);
            $table->decimal('tvpi_median', 16, 6);
            $table->decimal('tvpi_bottom', 16, 6);
            $table->decimal('tvpi_min', 16, 6);
            $table->decimal('dpi_max', 16, 6);
            $table->decimal('dpi_top', 16, 6);
            $table->decimal('dpi_median', 16, 6);
            $table->decimal('dpi_bottom', 16, 6);
            $table->decimal('dpi_min', 16, 6);
            $table->decimal('called_max', 16, 10);
            $table->decimal('called_top', 16, 10);
            $table->decimal('called_median', 16, 10);
            $table->decimal('called_bottom', 16, 10);
            $table->decimal('called_min', 16, 10);
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
        Schema::drop('benchmarks');
    }
}
