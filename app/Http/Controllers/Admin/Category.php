<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class Category extends Controller
{
    public function category_add(){
        return view('admin.category_add');
    }
    public function add_category(Request $request){
        $validation_rules = [
            'category_name'=>'required|unique:categories,category_name',
//            |unique:categories,username
            'slug'=>'required',
        ];
        $this->validate($request,$validation_rules);
        $data = $request->except('_token');
        \App\Model\Category::create($data);

        return redirect()->back();
    }
    public function all_category(){
        $all_category = \App\Model\Category::all();
        return view('admin.category_add',compact('all_category'));

    }
}
