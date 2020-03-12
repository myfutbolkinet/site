<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('orders');
        Schema::create('orders', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('status');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->string('client_phone')->nullable();
            $table->string('client_email')->nullable();
            $table->string('client_name')->nullable();
            $table->string('client_city')->nullable();
            $table->string('client_country')->nullable();
            $table->string('orders_details')->nullable();
            $table->string('client_postal_code')->nullable();
            $table->string('client_address')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
           /* $table->dropColumn('client_phone');
            $table->dropColumn('client_email');
            $table->dropColumn('client_name');
            $table->dropColumn('client_city');
            $table->dropColumn('client_country');
            $table->dropColumn('orders_details');
            $table->dropColumn('client_postal_code');
            $table->dropColumn('client_address');*/
            Schema::dropIfExists('orders');

        });
    }
}
