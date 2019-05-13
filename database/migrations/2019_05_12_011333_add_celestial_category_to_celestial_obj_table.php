<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCelestialCategoryToCelestialObjTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rg_celestial_obj', function (Blueprint $table) {
            $table->unsignedBigInteger('celestial_category_id');

            $table->foreign('celestial_category_id')
                  ->references('id')->on('rg_celestial_category')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rg_celestial_obj', function (Blueprint $table) {
            //
        });
    }
}
