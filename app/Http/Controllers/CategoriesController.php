<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venue;
use App\Category;

class CategoriesController extends Controller
{
    //
    // public function create()
    // {
    // 	return view('Categories.create');
    // }
    public function store(Request $request)
    {
    	$category = new Category;
    	$category->name = Request($name);
    	$category->save();

    	 return redirect('/details');
    }
}
