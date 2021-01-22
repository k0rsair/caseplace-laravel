<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_brands', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("name_rus");
            $table->string("code");
            $table->text("title");
            $table->text("description");
            $table->text("content");
            $table->string("slug")->unique();
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

        Schema::dropIfExists('case_brands');
    }
}
