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
            $table->bigIncrements('order_id');
            $table->bigInteger('taken_by')->unsigned();
            $table->foreign('taken_by')->references('user_id')->on('users');
            $table->double('total_price');
            $table->string('status');
            $table->dateTime('order_at');
            $table->dateTime('estimated_delevary');
            $table->dateTime('delevary_at');
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
