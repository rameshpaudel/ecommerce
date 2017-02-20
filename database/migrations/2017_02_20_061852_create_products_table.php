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
            
            $table->string('title');
            $table->string('brand');
            //Type might be link or general
            $table->string('type');


            $table->decimal('price',10,2);
            
            $table->boolean('in_stock');
            
            $table->integer('quantity');

            $table->string('colors_available');

            $table->text('description');
            $table->text('short_description');
            
            $table->integer('category_id')->nullable();
            $table->boolean('status')->default(false);

            $table->unsignedInteger('user_id')->nullable();
            
            $table->softDeletes();
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
