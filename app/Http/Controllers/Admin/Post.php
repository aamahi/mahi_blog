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
        $photo_name = $request->file('photo');
        $title = $request->title;
        $title_explode = explode(' ',$title);
        $title_end = end($title_explode);
        $photo_extension = $photo_name->getClientOriginalExtension();
        $photo= strtolower($title_end.".".$photo_extension);

        if($photo_name->isValid()){
            $photo_name->storeAs('post',$photo);
        }
        $post = [];
        $post['title']=$request->title;
        $post['category_id']=$request->category_id;
        $post['details']=$request->details;
        $post['details']=$request->details;
        $post['photo']=$photo;

        $write_post = \App\Model\Post::insert($post);
        return redirect()->route('admin.home');
    }

    public function all_post(){
        $posts = \App\Model\Post::all();
        return view('admin.all_post',compact('posts'));
    }
}
