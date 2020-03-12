<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateGoodsTableAddSiteidField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('goods', function($table) {
            if (!Schema::hasColumn('goods', 'site_id'))
            {
                $table->unsignedBigInteger('site_id')->unsigned();;
                $table->foreign('site_id')->references('id')->on('sites')->onDelete('cascade');
            }

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        dump(123);
        Schema::table('goods', function (Blueprint $table) {
            $table->dropForeign(['site_id']);
        });

        // drop the actual columns
        Schema::table('goods', function (Blueprint $table) {
            $table->dropColumn('site_id');


        });

    }
}
