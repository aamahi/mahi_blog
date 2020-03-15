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
}
