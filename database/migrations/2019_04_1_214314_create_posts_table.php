<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rg_posts', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->unsignedBigInteger('post_category_id');
            $table->unsignedBigInteger('post_author_id');
            $table->text('subject');
            $table->text('excerpt');
            $table->boolean('active')->default(false);
            $table->longText('post_content');
            $table->timestamps();

            $table->foreign('post_category_id')
                  ->references('id')->on('rg_post_category')
                  ->onDelete('cascade');

            $table->foreign('post_author_id')
                  ->references('id')->on('rg_users')
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
        Schema::dropIfExists('rg_posts');
    }
}