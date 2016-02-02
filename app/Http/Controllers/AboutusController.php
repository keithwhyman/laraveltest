<?php

namespace App\Http\Controllers;
use App\AboutUs;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;


class AboutusController extends Controller
{
	public function index() {

		$aboutusregions = DB::table('aboutusregions')->distinct()->get();

		foreach($aboutusregions as $anr => $regiondetails) {
			$regionheading = 'serving'.' '.$regiondetails->subtext.' '.$regiondetails->name_eng;
			$aboutus[ $regiondetails->id] ['regionheading'] = $regionheading;

			$aboutus[$regiondetails->id] = DB::table('aboutus')
				   ->where('status', '=', 'live')	
				   ->whereRaw('where_eng = '. $regiondetails->id)	
		           ->get();
		}
		
		echo "<pre>";
		print_r( $aboutus );
		die;
		/* $aboutus = DB::table('aboutusregions') 
				   ->join('aboutus', 'aboutusregions.id', '=',  'aboutus.where_eng')	
					->distinct()->get();
*/
		#print_r( $aboutus );
		#die;
		
/*
        $aboutus = AboutUs::where('status', '=', 'live')
				   ->join('aboutusregions', 'aboutus.where_eng', '=', 'aboutusregions.id')	
		           ->groupBy('where_eng')->get();

		foreach($aboutus as $us) {
			if($us['where_eng'] != $heading) {
				
			}

			$heading = $us['where_eng'];
		}
*/
		
		# $aboutus = AboutUs::all();
        return view('pages.aboutus', compact('aboutus'));

	}

	public function create()
	{
		return view('auth.aboutus.create');
	}
}
