<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemHistory extends Model
{
     protected $guarded = array('id');

    public static $rules = array(
        'item_id' => 'required',
        'edited_at' => 'required',
    );
}
