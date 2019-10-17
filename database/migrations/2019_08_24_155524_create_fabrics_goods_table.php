<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFabricsGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fabrics_goods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('good_id')->unsigned()->default(0);
            $table->foreign('good_id')->references('id')->on('goods')->onDelete('cascade');;
            $table->integer('fabric_id')->unsigned()->default(0);
            $table->foreign('fabric_id')->references('id')->on('fabrics')->onDelete('cascade');;
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

        Schema::dropIfExists('fabrics_goods');
    }
}
