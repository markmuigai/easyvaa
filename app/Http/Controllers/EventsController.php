<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event;
use App\Venue;
use Auth;
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $event = Event::find(7);
        return view('Events.show', compact('event'));
    }


    public function myevents()
    {
        $user = User::find(Auth::id());
        $userId = $user->id;
        $events = Event::where('user_id', $userId)->get();
        return view('Events.index', compact('events'));
    }

    public function myevent(Event $event)
    {   
        $event = Event::find($event->id);
        return view('events.myevent', compact('event'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Venue $venue)
    {

        //add an event to a venue
        //$venue->addVenue(request('event_type')); 
        // Event::create(request(['venue_id', 'event_type']));
        $venue = Venue::find($venue->id);
        $event = new Event;
        $event->event_type = request('event_type');
        $event->user_id = Auth::id();
        $event->venue_id = $venue->id;
        $event->date = request('date');
        $event->head_count = request('head_count');
        $event->message = request('message');
        //Save it to the database
        $event->save();
        //dd($event);
        
        //send an email to the owner about the booking on request
        //$user = Auth::user();
        //\Mail::to($venue->user)->send(new RequestVenue($user));

        //flash message. Thankyou for booking. We will get back to you in a jiffy!

        session()->flash('message', 'Thanks for the quote. Owners will get back to you in a jiffy!');
        //And then redirect to the previous page
        return redirect('/sms/send/{to}');
    }

    public function notify(\Nexmo\Client $nexmo, $to, Event $event)
    {
            $event = Event::orderBy('created_at', 'desc')->first();
            $username = Auth::user()->name;
            $message = $nexmo->message()->send([
                'to' => 254717831279,
                'from' => "NEXMO",
                'text' => $username.'is requesting to use your venue! Send him a quote at http://127.0.0.1:8000/myvenue/$venue->id',
            ]);
            
            
            return redirect('/myevents');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
        $event = Event::find($event->id);
        return view('Events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
        $event = Event::find($event->id);
        $this->validate(request(),[
            'event_type' =>'required|min:5',
        ]);
        //add an event to a venue
        //$venue->addVenue(request('event_type')); 
        // Event::create(request(['venue_id', 'event_type']));
        $event->event_type = request('event_type');
        $event->user_id = Auth::id();
        $event->venue_id = $venue->id;
        $event->date = request('date');
        $event->head_count = request('head_count');
        $event->message = request('message');
        //Save it to the database
        $event->save();
        
        //send an email to the owner about the booking on request
        //$user = Auth::user();
        //\Mail::to($venue->user)->send(new RequestVenue($user));

        //flash message. Thankyou for booking. We will get back to you in a jiffy!

        session()->flash('message', 'Thanks for the quote. Owners will get back to you in a jiffy!');
        //And then redirect to the previous page
        return redirect('/myevents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
        $event = Event::find($event->id);
        $event->delete();
        return redirect('/myevents');
    }

}
