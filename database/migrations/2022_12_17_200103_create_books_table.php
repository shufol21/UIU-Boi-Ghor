<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->bigInteger('cat_id');
            $table->string('name');
            $table->string('author_name');
            $table->mediumText('short_description');
            $table->longText('long_description');
            $table->double('original_price');
            $table->double('selling_price');
            $table->string('image');
            $table->integer('qty');
            $table->tinyInteger('status');
            $table->tinyInteger('trending');

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