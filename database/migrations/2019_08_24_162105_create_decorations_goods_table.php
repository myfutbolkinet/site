<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDecorationsGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decorations_goods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('good_id')->unsigned()->default(0);
            $table->foreign('good_id')->references('id')->on('goods')->onDelete('cascade');;
            $table->unsignedBigInteger('decoration_id')->unsigned()->default(0);
            $table->foreign('decoration_id')->references('id')->on('decorations')->onDelete('cascade');;
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

        Schema::dropIfExists('decorations_goods');
    }
}
