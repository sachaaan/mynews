<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileHistory extends Model
{
    protected $guarded = array('id');
    //
    public static $rules = array(
        'profile_id' => 'reauired',
        'edited_at' =>'required',
    );
}
