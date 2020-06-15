<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventi extends Model
{
    //

    protected $table = "event";

    public function attendees()
    {
        return $this->belongsTo(Attendees::class,'unique_id','event_id');
    }
}
