<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create()
    {
        return redirect('admin/profile/create');
        {
            $this->validate($request, Profile::$rules);
            $profile = Profile::find($request->id);
            $profile_form = $request->all();
            if ($request->remove == 'true') {
            $profile_form['image_path'] = null;
            } elseif ($request->file('image')) {
            $path = $request->file('image')->store('public/image');
            $profile_form['image_path'] = basename($path);
            } else {
            $profile_form['image_path'] = $profile->image_path;
            }

            unset($profile_form['image']);
            unset($profile_form['remove']);
            unset($profile_form['_token']);
            // 該当するデータを上書きして保存する
            $profile->fill($profile_form)->save();
            return redirect('admin/profile/create');
        }
    }
    
    public function edit()
    {
        return view('admin.profile.edit');
    }
    
    public function update()
    {
        return redirect('admin/profile/edit');
    }
    
}

