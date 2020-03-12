<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducttypesGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producttypes_goods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('good_id')->unsigned()->default(0);
            $table->foreign('good_id')->references('id')->on('goods')->onDelete('cascade');;
            $table->unsignedBigInteger('producttype_id')->unsigned()->default(0);
            $table->foreign('producttype_id')->references('id')->on('product_types')->onDelete('cascade');;
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

        Schema::dropIfExists('producttypes_goods');
    }
}
