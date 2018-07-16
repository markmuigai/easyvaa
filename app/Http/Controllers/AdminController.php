<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Venue;
use App\User;
use App\Event;


class AdminController extends Controller
{
    //
    public function dashboard()
    {
    	$venues = Venue::all();
    	$users = User::all();
    	$events = Event::all();
    	return view('Admin.dashboard', compact('venues', 'users', 'events'));
    }
}
