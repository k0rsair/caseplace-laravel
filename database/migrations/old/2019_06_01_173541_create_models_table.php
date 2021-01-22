<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger("brand_id")->unsigned();
            $table->string("name");
            $table->string("name_rus");
            $table->bigInteger("model_type_id")->unsigned();

            $table->string("code");
            $table->string("slug");
            $table->text("title");
            $table->text("description");
            $table->text("content");
            $table->integer("sort");
            $table->boolean("visible");
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
        Schema::dropIfExists('models');
    }
}
