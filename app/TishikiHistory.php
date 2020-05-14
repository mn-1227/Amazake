<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TishikiHistory extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'tishiki_id' => 'required',
        'edited_at' => 'required',
    );
}
