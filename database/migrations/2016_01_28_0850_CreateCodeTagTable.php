<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodeTagTable
{
    public function up()
    {
        Schema::create('codepress_tag', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });


    }

    public function down()
    {
        Schema::drop('codpress_tag');

    }
}