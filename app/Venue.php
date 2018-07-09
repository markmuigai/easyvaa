<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
	//property for fields we're okay being mass assigned
    //protected $fillable = ['venue_name', 'description'];

    //property for fields restricted from being mass assigned
    //Everything else will be allowed through
    protected $guarded = ['password'];

    //Fetch events associated with a Venue
    //$venue->events
    public function events()
    {
    	return $this->hasMany(Event::class);
    }

    //To retrieve user who owns a venue
    //$venue->user or $event->venue->user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
