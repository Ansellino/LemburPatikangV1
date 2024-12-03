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
        $post = articles::where('Category_id',2)->get();
        return view('welcome',['post'=>$post]);
    }
    public function aboutus(){
        $post = articles::where('category_id', 4)->get(); // Fetch posts with category_id 4
        return view('aboutus', ['post' => $post]);
    }
    public function category($id){
        $post = articles::with('Category')->where('category_id',$id)->get();
        $category = categories::where('id',$id)->first();
        return view('category',['post'=>$post,'category'=>$category]);
    }
    public function post($id){
        $post = articles::with('user')->find($id);
        return view('post',['post'=>$post]);
    }

    public function contactus(){
        return view('contactus');
    }

    public function csr(){
        return view('csr');
    }

    public function researchdedication(){
        return view('researchdedication');
    }

    public function testing(){
        $post = articles::where('category_id', 4)->get(); // Fetch posts with category_id 4
        return view('testing', ['post' => $post]);
    }
}
