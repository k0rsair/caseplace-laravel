<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPrintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_prints', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("code");
            $table->string("slug");
            $table->integer("views");
            $table->integer("buy");
            $table->boolean("visible");
            $table->bigInteger("print_type_id")->unsigned();
            $table->foreign('print_type_id')->references('id')->on('product_print_types');
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
        Schema::table("product_prints", function (Blueprint $table) {
            $table->dropForeign("product_prints_print_type_id_foreign");
        });
        Schema::dropIfExists('product_prints');
    }
}
