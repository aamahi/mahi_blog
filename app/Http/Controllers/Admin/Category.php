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

    public function active_category($id){
       $active_category = \App\Model\Category::find($id);
       $active_category->status =1;
       $active_category->save();
       return redirect()->back();
    }
    public function deactive_category($id){
        $deactive_category = \App\Model\Category::find($id);
        $deactive_category->status =0;
        $deactive_category->save();
        return redirect()->back();
    }
    public function delete_category($id){
        $delete_category = \App\Model\Category::find($id)->delete();
        return redirect()->back();
    }
    public function update_category($id){
        $category = \App\Model\Category::find($id);
        return view('admin.update_category',compact('category'));
    }
    public function edit_category(Request $request ,$id){
        $validation_rules = [
            'category_name'=>'required',
            //unique:categories,category_name
            'slug'=>'required',
        ];
        $this->validate($request,$validation_rules);
        $update_category = \App\Model\Category::find($id);
        $update_category->category_name = $request->category_name;
        $update_category->slug = $request->slug;
        $update_category->save();
        return redirect()->route('admin.all_category');
    }
    public function show_category($id){
        $category = \App\Model\Category::with('posts')->find($id);
       return view('admin.show_category',compact('category'));
    }
}
