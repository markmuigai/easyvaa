<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $guarded = ['user_id'];

    //Fetch venues associated with an event
    //$event->venue  
    public function venue()
    {
    	return $this->belongsTo(Venue::class);
    }

    //Fetch user associated with an event
    //$event->user->name to retrieve the name of the user
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
