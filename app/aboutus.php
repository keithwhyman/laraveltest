<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'aboutus';


	public function aboutus()
    {
        return $this->belongsTo('App\AboutUsRegions', 'id', 'where_eng');
    }



}
