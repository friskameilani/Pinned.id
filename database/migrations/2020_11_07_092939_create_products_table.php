<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('tailor_id');
            $table->string('product_name');
            $table->string('product_price');
            $table->string('product_size')->nullable();
            $table->string('product_desc')->nullable();
            $table->string('product_image');
            $table->string('product_category')->nullable();
            $table->string('product_type')->nullable();
            $table->string('product_material')->nullable();

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
