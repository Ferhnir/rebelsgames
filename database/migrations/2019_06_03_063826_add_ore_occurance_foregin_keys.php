<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOreOccuranceForeginKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ore_occurance', function (Blueprint $table) {            
            $table->foreign('ore_id')
            ->references('id')->on('rg_ore')
            ->onDelete('cascade');

            $table->foreign('celestial_id')
                ->references('id')->on('rg_celestial_obj')
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
        //
    }
}
