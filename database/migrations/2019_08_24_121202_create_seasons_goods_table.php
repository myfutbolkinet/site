<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeasonsGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seasons_goods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('good_id')->unsigned()->default(0);
            $table->foreign('good_id')->references('id')->on('goods')->onDelete('cascade');;
            $table->integer('season_id')->unsigned()->default(0);
            $table->foreign('season_id')->references('id')->on('seasons')->onDelete('cascade');;
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

        Schema::dropIfExists('seasons_goods');
    }
}
