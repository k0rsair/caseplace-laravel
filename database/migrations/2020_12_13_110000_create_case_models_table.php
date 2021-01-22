<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_models', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("name_rus");
            $table->bigInteger("brand_id")->unsigned();
            $table->bigInteger("model_type_id")->unsigned();
            $table->string("code");
            $table->string("slug")->unique();
            $table->text("title");
            $table->text("description");
            $table->text("content");
            $table->integer("sort");
            $table->boolean("visible");
            $table->timestamps();
            $table->foreign('brand_id')->references('id')->on('case_brands');
            $table->foreign('model_type_id')->references('id')->on('model_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("case_models", function (Blueprint $table) {
            $table->dropForeign("case_models_model_type_id_foreign");
        });
        Schema::table("case_models", function (Blueprint $table) {
            $table->dropForeign("case_models_brand_id_foreign");
        });
        Schema::dropIfExists('case_models');
    }
}
