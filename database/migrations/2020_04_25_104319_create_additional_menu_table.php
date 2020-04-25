<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantSiteMenuPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additional_menu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nestable_id');
            $table->string('text');
            $table->boolean('is_photo');
            $table->string('photo1');
            $table->string('link1');
            $table->string('photo2');
            $table->string('link2');
            $table->string('photo3');
            $table->string('link3');
            $table->string('photo4');
            $table->string('link4');
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
        Schema::dropIfExists('additional_menu');
    }
}
