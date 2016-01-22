<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	   Schema::create('aboutus', function (Blueprint $table) {
       $table->increments('dbid');
	   $table->bigIncrements('id');
       $table->string('name');    ->unique();
	   $table->string('title_eng', 100);
	   $table->string('title_de', 100);
	   $table->string('company', 255);
	   $table->enum('where_eng', ['Eastern Shore','Annapolis Valley','South Shore','Halifax Metro','Yarmouth & Digby County','Cape Breton','Hamburg','Baden Württemberg','Florida','Switzerland']);
	   $table->text('bio_eng');
	   $table->text('bio_de');
	   $table->string('email', 255);
	   $table->text('contact_eng');
	   $table->text('contact_de');
	   $table->text('contact2_eng');
	   $table->text('contact2_de');
	   $table->text('house_bio_eng');
	   $table->text('house_bio_de');
	   $table->enum('status', ['live','dead'])->default('live');
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
        Schema::drop('aboutus');
    }
}
