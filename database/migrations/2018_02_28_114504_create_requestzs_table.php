<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestzsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brand_id')->unsigned();  //foreign key 
            $table->string('req_year');
            $table->string('req_style');
            $table->string('req_ext_color');  
            $table->string('req_int_color');     
            $table->string('req_comment');      
            $table->integer('model_id')->unsigned();      //foreign key                                         
            $table->timestamps();

            $table->foreign('brand_id')->references('id')->on('brands')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('model_id')->references('id')->on('models')->onUpdate('cascade')->onDelete('cascade');                        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('requestzs');
    }
}
