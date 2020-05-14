<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TravelHistory extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'travel_id' => 'required',
        'edited_at' => 'required',
    );
}
