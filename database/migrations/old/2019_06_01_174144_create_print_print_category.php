<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrintPrintCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('print_print_category', function (Blueprint $table) {
            //
            $table->bigInteger('print_id')->unsigned();
            $table->bigInteger('print_category_id')->unsigned();
            $table->primary(['print_id', 'print_category_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('print_print_category');
    }
}
