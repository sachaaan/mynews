<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileHistory extends Model
{
    protected $guarded = array('id');
    //
    public static $rules = array(
        'title' => 'reauired',
        'body' =>'required',
    );
    public function profilehistories()
    {
    return $this->hasMany('App\History');
    }
}
