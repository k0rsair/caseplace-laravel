<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMockupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mockups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger("model_id")->unsigned();
//
            $table->bigInteger("blank_id")->unsigned();
//
            $table->bigInteger("price_id")->unsigned();
//
            $table->integer("width");
            $table->integer("height");
            $table->integer("original_width");
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
        Schema::dropIfExists('mockups');
    }
}
