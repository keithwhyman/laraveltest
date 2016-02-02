<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aboutusregions extends Model
{

    protected $table = 'aboutusregions';


	public function aboutus()
    {
        return $this->belongsTo('App\AboutUs', 'id', 'where_eng');
    }

	public function wtf() 
	{
		
		$wtf = DB::table('aboutusregions') 
				   ->join('aboutus', 'aboutusregions.id', '=',  'aboutus.where_eng')	
				   ->where('aboutus.status', '=', 'live')
		           ->aboutus.groupBy('where_eng')->distinct()->get();
		return $wtf;
	}

	public function getEnglishHeading() 
	{
		
		return 'serving'.' '.$this->subtext.' '.$this->name_eng;
	}
}
