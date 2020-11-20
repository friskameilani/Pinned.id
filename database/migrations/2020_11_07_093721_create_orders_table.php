<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('random_code');
            $table->integer('user_id');
            $table->integer('product_id')->nullable();
            $table->integer('tailor_id')->nullable();
            $table->string('ordered_name');
            $table->string('ordered_address');
            $table->string('ordered_phone');
            $table->integer('qty');
            $table->string('size');
            $table->integer('total_price');
            $table->string('design')->nullable();
            $table->string('notes')->nullable();
            $table->date('date');
            $table->string('status'); //buat terkirim, dlam proses atau ngganya
         //   $table->integer('code');
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
        Schema::dropIfExists('orders');
    }
}
