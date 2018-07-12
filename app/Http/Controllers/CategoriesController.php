<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venue;

class CategoriesController extends Controller
{
    //
    public function create()
    {
    	return view('Categories.create');
    }
    public function store(Request $request)
    {
    	$category = new category;
    	$category->name = Request($name);
    	$category->save();

    	 return redirect('/venues/addcategoryfeature');
    }
}
