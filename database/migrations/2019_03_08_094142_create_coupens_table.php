<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoupensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupens', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title')->unique();
            $table->longText('description');
            $table->integer('dis_product')->nullable();
            $table->integer('dis_cash')->nullable();
            $table->integer('dis_delivery')->nullable();
            $table->integer('dis_category')->nullable();
            $table->integer('dis_product_id')->nullable();
            $table->float('min_expenses');
            $table->integer('uses');
            $table->date('expire_date');

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
        Schema::dropIfExists('coupens');
    }
}
