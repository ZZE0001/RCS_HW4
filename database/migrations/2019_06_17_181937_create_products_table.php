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
            $table->string('SKU');
            $table->string('Name');
            $table->decimal('Price_EUR',10,2);
            $table->string('Type');
            $table->integer('Size_MB')->nullable();
            $table->decimal('Weight_KG',10,3)->nullable();
            $table->integer('DimensionH')->nullable();
            $table->integer('DimensionW')->nullable();
            $table->integer('DimensionL')->nullable();
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
