<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSizesGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sizes_goods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_good')->unsigned()->default(0);
            $table->foreign('id_good')->references('id')->on('goods')->onDelete('cascade');;
            $table->unsignedBigInteger('id_size')->unsigned()->default(0);
            $table->foreign('id_size')->references('id')->on('sizes')->onDelete('cascade');;
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

        Schema::dropIfExists('sizes_goods');
    }
}
