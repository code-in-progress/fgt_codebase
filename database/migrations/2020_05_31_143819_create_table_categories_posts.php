<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCategoriesPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_posts', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('post_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');


            /*$table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('category_id');
            $table->unique(['post_id', 'category_id']);
            $table->foreign('post_id')
                ->references('id')->on('posts')
                ->onDelete('cascade');
            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onDelete('cascade');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories_posts');
    }
}
