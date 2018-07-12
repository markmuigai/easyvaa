<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venue;

class CategoriesController extends Controller
{
    //
    public function create()
    {
    	return view('categories.create');
    }
    public function store($venueId, Request $request)
    {
    	$venue->roles()->attach($request->all());

    }
}
