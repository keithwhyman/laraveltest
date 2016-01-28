<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutusController extends Controller
{
    public funtion index()
	{

	}

	public funtion index() {

        $aboutus = Aboutus::where('published_at', '<=', Carbon::now())
            ->groupBy('where_eng'));

        return view('aboutus.index', compact('aboutus'));

	}
	




}
