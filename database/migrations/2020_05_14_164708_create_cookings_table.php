<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('zairyou');
            $table->string('body1');
            $table->string('body2');
            $table->string('image_path1')->nullable();
            $table->string('image_path2')->nullable();
            $table->string('image_path3')->nullable();
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
        Schema::dropIfExists('cookings');
    }
}
