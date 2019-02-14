<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('fk_user_id')->unsigned();
            $table->integer('fk_category_id')->unsigned();
            $table->string('name');
            $table->string('phone');
            $table->string('website');
            $table->json('regular_hours');
            $table->json('special_hours')->nullable();
            $table->mediumText('description')->nullable();
            $table->foreign('fk_user_id')->references('id')->on('users');
            $table->boolean('is_chain')->default(false);
            $table->boolean('is_publish')->default(false);
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
        Schema::dropIfExists('locations');
    }
}
