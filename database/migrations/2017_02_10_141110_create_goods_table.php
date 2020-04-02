<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unsigned()->default(0);
            $table->unsignedBigInteger('model_id')->unsigned()->default(0);
            $table->integer('type')->nullable()->default(0);
            $table->integer('category')->default(0);
            $table->integer('qnt')->default(0);
            $table->string('articul')->default('0');
            $table->text('description');
            $table->text('description2');
            $table->string('name')->default(0);
            $table->float('star')->default(0);
            $table->integer('star_counts')->default(0);
            $table->bigInteger('price_without_discount')->default(0);
            $table->float('price',15,2)->default(0);
            $table->bigInteger('count')->default(1);
            $table->integer('discount')->nullable()->default(0);
            $table->integer('main_screen')->nullable()->default(0);
            $table->integer('is_featured')->nullable()->default(null);
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('likes');
        Schema::dropIfExists('goods');
    }
}
