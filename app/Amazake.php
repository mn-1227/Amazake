<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amazake extends Model
{
    protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'amazake' => 'required',
        'nedan' => 'required',
        'ryou' => 'required',
        'kaisya' => 'required',
        'en_ml' => 'required',
        
    );
    
    public function histories()
    {
      return $this->hasMany('App\AmazakeHistory');
    }
}
