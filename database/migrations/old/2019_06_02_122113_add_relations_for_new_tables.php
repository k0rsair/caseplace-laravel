<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationsForNewTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table("models", function (Blueprint $table) {
//            $table->foreign('brand_id')->references('id')->on('brands')->onDelete("cascade");
//            $table->foreign('model_type_id')->references('id')->on('model_types')->onDelete('cascade');
        });
        Schema::table("prints", function (Blueprint $table) {

            $table->foreign('id')->references('print_id')->on('print_print_category');
//            $table->foreign('print_type_id')->references('id')->on('print_types');

        });
        Schema::table("print_categories", function (Blueprint $table) {

//            $table->foreign('id')->references('print_category_id')->on('print_print_category');

        });
//        Schema::table("mockups", function (Blueprint $table) {
//
//            $table->foreign('model_id')->references('id')->on('models')->onDelete("cascade");
//            $table->foreign('blank_id')->references('id')->on('blanks');
//            $table->foreign('price_id')->references('id')->on('prices');
//
//        });
//        Schema::table("cases", function (Blueprint $table) {
//
//            $table->foreign('code')->references('code')->on('weights');
//            $table->foreign('mockup_id')->references('id')->on('mockups');
//            $table->foreign('print_id')->references('id')->on('prints');
//
//        });
//        Schema::table("print_types", function (Blueprint $table) {
//
//            $table->foreign('id')->references('print_type_id')->on('print_type_printing_type')->onDelete("cascade");
//
//        });
//        Schema::table("case_types", function (Blueprint $table) {
//
//            $table->foreign('id')->references('case_type_id')->on('case_type_printing_type')->onDelete('cascade');
//
//        });
//        Schema::table("printing_types", function (Blueprint $table) {
//
//            $table->foreign('id')->references('printing_type_id')->on('case_type_printing_type')->onDelete('cascade');
//
//        });
//        Schema::table("blanks", function (Blueprint $table) {
//
//            $table->foreign('case_type_id')->references('id')->on('case_types')->onDelete('cascade');
//
//        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("models", function (Blueprint $table) {
//            $table->dropForeign('models_brand_id_foreign');
//            $table->dropForeign('models_model_type_id_foreign');
        });
        Schema::table("prints", function (Blueprint $table) {

//            $table->dropForeign("prints_print_type_id_foreign");
            $table->dropForeign("prints_id_foreign");

        });
        Schema::table("print_categories", function (Blueprint $table) {

//            $table->dropForeign('print_categories_id_foreign');

        });
//
//        Schema::table("mockups", function (Blueprint $table) {
//
//            $table->dropForeign("mockups_model_id_foreign");
//            $table->dropForeign("mockups_blank_id_foreign");
//            $table->dropForeign("mockups_price_id_foreign");
//
//        });
//
//        Schema::table("cases", function (Blueprint $table) {
//
//            $table->dropForeign('cases_code_foreign');
//            $table->dropForeign('cases_mockup_id_foreign');
//            $table->dropForeign('cases_print_id_foreign');
//
//        });
//
//        Schema::table("print_types", function (Blueprint $table) {
//
//            $table->dropForeign('print_types_id_foreign');
//
//        });
//
//        Schema::table("case_types", function (Blueprint $table) {
//
//            $table->dropForeign('case_types_id_foreign');
//
//        });
//
//        Schema::table("printing_types", function (Blueprint $table) {
//
//            $table->dropForeign('printing_types_id_foreign');
//
//        });
//        Schema::table("blanks", function (Blueprint $table) {
//            $table->dropForeign('blanks_case_type_id_foreign');
//        });
        //
    }
}
