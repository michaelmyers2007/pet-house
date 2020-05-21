<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code_no');
            $table->integer('qty');
            $table->integer('price');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('food_id');
            $table->unsignedBigInteger('acc_id');

            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('food_id')->references('id')->on('foods');
            $table->foreign('acc_id')->references('id')->on('accessories');
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
        Schema::dropIfExists('products');
    }
}
