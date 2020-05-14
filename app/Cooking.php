<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cooking extends Model
{
    protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'title' => 'required',
        'zairyou' => 'required',
        'body1' => 'required',
        'body2' => 'required',
        
    );
    public function histories()
    {
      return $this->hasMany('App\CookingHistory');
    }
}
