<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();
            $table-> string('name');
            $table-> string('image');
            $table-> string('slug');

            $table-> boolean('color')->default(false); //No se requiern los campos
            $table-> boolean('size')->default(false);

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')-> on('categories') ;

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
        Schema::dropIfExists('subcategories');
    }
}
