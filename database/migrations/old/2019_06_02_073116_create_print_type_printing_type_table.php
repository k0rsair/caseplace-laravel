<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrintTypePrintingTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('printing_type_print_type', function (Blueprint $table) {
            //
            $table->bigInteger("printing_type_id")->unsigned();
            $table->bigInteger("print_type_id")->unsigned();
            $table->primary(['printing_type_id', 'print_type_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('printing_type_print_type');
    }
}
