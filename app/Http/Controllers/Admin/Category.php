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
       return $request->all();
    }
}
