<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	   Schema::create('regions', function (Blueprint $table) {
	   $table->integer('id');
       $table->string('name_de');
	   $table->string('name_eng');
	   $table->string('showid', 2);
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
        Schema::drop('regions');
    }
}


