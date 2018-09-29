<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('number_of_contacts');
            $table->integer('status');
            $table->string('name');
            $table->string('company_name');
            $table->string('mobile');
            $table->string('add_phone');
            $table->string('email');
            $table->string('website');
            $table->string('skype');
            $table->string('viber');
            $table->string('whatsup');
            $table->string('answer_status');
            $table->text('wishes');
            $table->text('description_of_last_call');
            $table->date('last_call');
            $table->date('next_call');
            $table->string('city');
            $table->string('street');
            $table->integer('house');
            $table->integer('office');
            $table->integer('index');
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

        Schema::dropIfExists('contacts');
    }
}
