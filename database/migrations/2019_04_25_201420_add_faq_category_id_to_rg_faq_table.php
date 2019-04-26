<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFaqCategoryIdToRgFaqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rg_faq', function (Blueprint $table) {            
            $table->unsignedBigInteger('faq_category_id');

            $table->foreign('faq_category_id')
            ->references('id')->on('rg_faq_category')
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
        Schema::table('rg_faq', function (Blueprint $table) {
            //
        });
    }
}
