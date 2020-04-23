<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amazake extends Model
{
    protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'title' => 'required',
        'amasa' => 'required',
        'komekan' => 'required',
        'kuse' => 'required',
    );
}
