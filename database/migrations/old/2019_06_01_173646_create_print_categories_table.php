<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrintCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('print_categories', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string("name");
            $table->string("slug");
            $table->boolean("main_page");
            $table->boolean("market");
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
        Schema::dropIfExists('print_categories');
    }
}
