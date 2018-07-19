<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Venue;
use App\User;
use App\Event;
use App\Payment;

class AdminController extends Controller
{
    //
    public function dashboard(Request $request)
    {
    	$data = $request->session()->all();

    	$venues = Venue::all();
    	$users = User::all();
    	$events = Event::all();
        $payments = Payment::all();

    	return view('Admin.dashboard', compact('venues', 'users', 'events', 'payments'));
    }

    public function allvenues()
    {
    	$venues = Venue::paginate(5);
    	return view('Admin.allvenues', compact('venues', 'users', 'events'));
    }

    public function allevents()
    {
        $events = Event::paginate(5);
        return view('Admin.allevents', compact('venues', 'users', 'events'));
    }

    public function allusers()
    {
        $users = User::paginate(5);
        return view('Admin.allusers', compact('venues', 'users', 'events'));
    }    
}
