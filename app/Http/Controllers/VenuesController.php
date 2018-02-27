<?php

namespace venyu\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Iivannov\Larasquare\Facade\Larasquare;


class VenuesController extends Controller
{
    //

    public function index()
    {

		$venues = Larasquare::venues(array("near"=>"Nairobi", "categoryId"=>"4d4b7105d754a06374d81259"));
		// $response = Larasquare::request("name");
    	// return $venues;    	
    	return view('venue.index', compact('venues'));
    }
}
