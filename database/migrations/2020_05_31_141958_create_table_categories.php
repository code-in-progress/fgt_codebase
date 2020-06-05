<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCategories extends Migration
{
    /**
     * Run the migrations.
     * Uses the Nested Set implementation
     * Credit: https://github.com/lazychaser/laravel-nestedset
     * @return void
     */
    public function up()
    {
        // blog table
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_name')->unique();
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->nestedSet();
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
        // drop blog table
        Schema::drop('categories');
    }
}
