<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AmazakeHistory extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'amazake_id' => 'required',
        'edited_at' => 'required',
    );
}
