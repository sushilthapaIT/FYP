<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->String('name');
            $table->String('slug')->unique();
            $table->String('short_description')->nullable();
            $table->text('description');
            $table->decimal('regular_price');
            $table->enum('stock_status',['instock','outofstock']);
            $table->String('image')->nullable;
            $table->text('images')->default('');
            $table->bigInteger('category_id')->unsigned()->nullable(); 
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
};
