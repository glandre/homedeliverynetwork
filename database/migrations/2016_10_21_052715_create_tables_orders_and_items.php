<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesOrdersAndItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');

            $table->integer('user_id')->unsigned()->nullable();
//            $table->foreign('user_id')->references('id')->on('users');

            $table->string('status', 15)->default('Cart');
            // status: Cart (not checkout yet); New (checked out by the costumer);
            //         Paid (Interac payment done); Complete (Shipping delivered).

            $table->timestamps();
        });

        Schema::create('order_product', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');

            $table->integer('order_id')->unsigned();
//            $table->foreign('order_id')->references('id')->on('orders');

            $table->integer('product_id')->unsigned();
//            $table->foreign('product_id')->references('id')->on('products');

            $table->integer('quantity')->unsigned();

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
        Schema::dropIfExists('order_product');
        Schema::dropIfExists('orders');
    }
}
