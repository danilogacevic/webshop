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
            $table->increments('id');
            $table->integer('is_active')->default(0);
            $table->string('product_title');
            $table->integer('category_id')->unsigned()->index();
            $table->float('product_price');
            $table->integer('product_quantity')->unsigned();
            $table->text('product_description');
            $table->text('short_description');
            $table->string('slug');


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
