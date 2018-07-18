<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    public function quote()
    {
        return $this->hasOne(Quote::class);
    }
    
}
