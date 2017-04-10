<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('comment', function (Blueprint $table){
            $table->increments('id');
            $table->string('name'); 
            $table->string('email'); 
            $table->string('comment'); 
            $table->integer('post_id')->unsigned(); 
             $table->timestamps();
        });

        Schema::table('comments', function($table) {
            $table->foreign('post_id')->references('id')->onDelete('cascade');
        });
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()

    {
        //
        Schema::dropForeign(['post_id']);
        Schema::dropIfExists('comment');
    }
}
