<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    //
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
    );
    protected $fillable = [
        'name', 'gender', 'hobby','introduction',
    ];
    public function profile_histories()
    {
    return $this->hasMany('App\ProfileHistory');
    }
}
