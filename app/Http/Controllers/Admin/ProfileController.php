<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            $posts = Profile::where('title',$cond_title)->get();
        }else{
            $posts = Profile::all();
        }
        return view('admin.profile.index',['posts' => $posts,'cond_title' => $cond_title]);
    }
    
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create()
    {
        //Varidationを行う
        $this->validate($request, Profile::$rules);
            
        $profile = new Profile;
        $form = $request->all();
        
        // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
        
        if(isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $profile->image_path = basename($path);
        } else {
            $profile->image_path = null;
        }
        
        // フォームから送信されてきた_tokenを削除する
              
        unset($form['_token']);
        // フォームから送信されてきたimageを削除する
        unset($form['image']);
        // データベースに保存する
        $profile->fill($form);
        $profile->save();
      
        return redirect('admin/profile/create');
    }
    
    public function edit()
    {
        $profile = Profile::find($request->id);
        if (empty($profile)) {
            abort(404);
        }
        return view('admin.profile.edit',['profile_form' =>$profile]);
    }
    
    public function update()
    {
        return redirect('admin/profile/edit');
    }
    
}

