<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellerResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_responses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('req_id')->unsigned();
            $table->string('sell_name');
            $table->string('sell_email'); 
            $table->string('sell_contact');
            $table->string('sel_comment');
            $table->timestamps();

            $table->foreign('req_id')->references('id')->on('requests')->onUpdate('cascade')->onDelete('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('seller_responses');
    }
}
