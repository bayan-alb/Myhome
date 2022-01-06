<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->number('baths')->nullable();
            $table->number('rooms')->nullable();
            $table->double('price');
            $table->enum('type' , ["Apartment" , "House" , "Villa"])->default('Apartment');          
            $table->double('space')->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_delivery')->default('0');

             $table->bigInteger('category_id')->unsigned();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('properties');
    }
}
