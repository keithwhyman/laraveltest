<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutusregionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	   Schema::create('aboutusregions', function (Blueprint $table) {
	   $table->integer('id');
       $table->string('name_de');
	   $table->string('name_eng');
	   $table->string('subtext');
       $table->timestamps();
	   $table->index('id');
	   
   });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('aboutusregions');
    }
}
