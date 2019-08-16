<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('author');
            $table->tinyInteger('rating');
            $table->char('isbn10',10)->nullable();
            $table->char('isbn13',13)->nullable();
            $table->date('date_read')->nullable();
            $table->string('azn_url', 512)->nullable();
            $table->string('category')->nullable();
            $table->string('img_name')->nullable();
            $table->string('slug')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('summary', 2048)->nullable();
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
        Schema::dropIfExists('books');
    }
}