<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::latest()->get();
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Venue $venue)
    {

        $this->validate(request(),[
            'event_type' =>'required|min:5',
        ]);
        //add an event to a venue
        //$venue->addVenue(request('event_type')); 
        // Event::create(request(['venue_id', 'event_type']));
        $event = new Event;
        $event->event_type = request('event_type');
        $event->user_id = Auth::id();
        $event->venue_id = $venue->id;
        //Save it to the database
        $event->save();
        
        //send an email to the owner about the booking on request
        //$user = Auth::user();
        //\Mail::to($venue->user)->send(new RequestVenue($user));

        //flash message. Thankyou for booking. We will get back to you in a jiffy!

        session()->flash('message', 'Thanks for the quote. Owners will get back to you in a jiffy!');
        //And then redirect to the previous page
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
