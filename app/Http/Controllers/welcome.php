<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\categories;
use App\articles;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class welcome extends Controller
{
    public function indexshow(){
        $post = articles::with('Category')->get();
        return view('welcome',['post'=>$post]);
    }
    public function aboutus(){
        return view('aboutus');
    }
    public function category($id){
        $post = articles::with('Category')->where('category_id',$id)->get();
        $category = categories::where('id',$id)->first();
        return view('category',['post'=>$post,'category'=>$category]);
    }
    public function post($id){
        $post = articles::where('id',$id)->first();
        return view('post',['post'=>$post]);
    }

    public function contactus(){
        return view('contactus');
    }
}
