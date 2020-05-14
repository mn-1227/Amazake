<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CookingHistory extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'cooking_id' => 'required',
        'edited_at' => 'required',
    );
}
