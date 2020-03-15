<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Post extends Controller
{
    public function write_post(){
        $category = \App\Model\Category::all();
        return view('admin.write_post',compact('category'));
    }
    public function write_post_p(Request $request){
        $validation_rules = [
            'title'=>'required',
            'category_id'=>'required',
            'details'=>'required',
            'photo'=>'required|image',
            'title'.'required'=>"Please give a title"
        ];
        $this->validate($request,$validation_rules);
        return $request->except('_token');
        echo "<pre>";
        return $request->file('photo');
        echo "</pre>";

    }
}
