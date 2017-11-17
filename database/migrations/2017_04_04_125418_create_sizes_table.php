<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sizes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_good')->unsigned()->default(0);
            $table->string('34')->default('0');
            $table->string('35')->default('0');
            $table->string('36')->default('0');
            $table->string('37')->default('0');
            $table->string('38')->default('0');
            $table->string('39')->default('0');
            $table->string('40')->default('0');
            $table->foreign('id_good')->references('id')->on('goods');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('sizes');
    }
}
