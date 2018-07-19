<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Quote;
use App\Venue;
use App\Event;
use Auth;

class QuotesController extends Controller
{
    //
    public function store(Request $request, Venue $venue, Event $event)
    {
    	$event = Event::find($event->id);
    	$quote = new Quote;
    	$quote->event_id = $event->id;
    	$quote->deposit = request('deposit');
    	$quote->basePrice = request('basePrice');
    	$quote->additionalCost = request('additionalCost');
    	$quote->totalPrice = $quote->deposit + ($quote->basePrice * $event->head_count)+$quote->additionalCost;
    	$quote->save();
    	// dd($quote);

    	return redirect('/');
    }

}
