<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProperiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('column');
            $table->boolean('active')->default(0);
            $table->boolean('main_property')->default(0);
            $table->boolean('hint')->default(0);
            $table->boolean('show_on_goods_page')->default(0);
            $table->boolean('show_on_comparison')->default(0);
            $table->boolean('show_on_filter')->default(0);
            $table->boolean('multiple')->default(0);
            $table->longText('categories');
            $table->longText('data');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('properties');


    }
}
