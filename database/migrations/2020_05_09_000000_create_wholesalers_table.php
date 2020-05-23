<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWholesalersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wholesalers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->integer('ext_id')->nullable();
            $table->string('name')->default('UserName');
            $table->string('manager')->nullable()->default('M');
            $table->string('sername')->default('UserSername');
            $table->string('phone')->unique();
            $table->string('city')->nullable();
            $table->string('group')->nullable();
            $table->boolean('active')->default(false);
            $table->timestamp('last_login')->nullable();
            $table->rememberToken();
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
   
    Schema::dropIfExists('wholesalers');
    }
}
