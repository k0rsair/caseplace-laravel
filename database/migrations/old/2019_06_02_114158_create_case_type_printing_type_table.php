<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseTypePrintingTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_type_printing_type', function (Blueprint $table) {
            //
            $table->bigInteger("case_type_id")->unsigned();
            $table->bigInteger("printing_type_id")->unsigned();
            $table->primary(['case_type_id', 'printing_type_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('case_type_printing_type');
    }
}
