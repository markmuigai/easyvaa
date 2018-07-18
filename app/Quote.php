<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    //
	    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function event()
    {
        return $this->hasOne(Event::class);
    }
}


