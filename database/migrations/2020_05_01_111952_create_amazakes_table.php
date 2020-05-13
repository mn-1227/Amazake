<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmazakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amazakes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('amazake');
            $table->float('amasa')->nullable();
            $table->float('komekann')->nullable();
            $table->float('kuse')->nullable();
            $table->integer('nedan');
            $table->string('ryou');
            $table->float('en_ml');
            $table->string('kaisya');
            $table->string('address')->nullable();
            $table->string('todoufuken')->nullable();
            $table->string('kansou')->nullable();
            $table->string('image_path1')->nullable();
            $table->string('image_path2')->nullable();
            $table->string('image_path3')->nullable();
            $table->string('link',2083)->nullable();
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
        Schema::dropIfExists('amazakes');
    }
}
