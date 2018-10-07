<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBakeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bakeries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('categoryId');
            $table->integer('price');
            $table->string('description');
            $table->string('images');
            $table->string('content');
            $table->string('note');
            $table->integer('status') ->default(1);
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
        Schema::dropIfExists('bakeries');
    }
}
