<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HousesController extends Controller
{
    public funtion index()
	{

	}

	public funtion create() {

		return view('houses.create');

	}
	

	public funtion store(Request $request) {

	}



}
