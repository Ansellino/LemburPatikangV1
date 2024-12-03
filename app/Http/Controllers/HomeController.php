<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\User;
use App\categories;
use App\articles;
use Redirect;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile(){
        $user = Auth::user();

        return view('editprofile',['user'=>$user]);
    }

    public function editedprofile(Request $request){
        $user = Auth::user();
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required','numeric'],
        ])->validate();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        return Redirect::back()->with('message','Update Successful !');

    }
    public function blog(){
        $user = Auth::user();
        $articles = articles::with('User')->where('user_id',$user->id)->get();
        return view('blog',['articles'=>$articles]);
    }

    public function editblog($id){
        $user = Auth::user();
        $category = categories::all();
        $articles = articles::where('id',$id)->first();
        return view("editblog",['user'=>$user,'category'=>$category,'articles'=>$articles]);
    }
    public function createblog(){
        $user = Auth::user();
        $category = categories::all();
        return view("createblog",['user'=>$user,'category'=>$category]);
    }
    public function createdblog(Request $request){
        Validator::make($request->all(), [
            'title'   => 'required|unique:articles',
            'textarea' => 'required',
            'image'        => 'required',
        ])->validate();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = $request->file('image')->getClientOriginalName();
            $destinationPath = public_path('assets/images');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
          }
        $user = Auth::user();
          $articles = new articles;
          $articles->user_id = $user->id;
          $articles->category_id = $request->myselect+1;
          $articles->title = $request->title;
          $articles->description = $request->textarea;
          $articles->image = $name;
          $articles->tags = $request->tags;
          $articles->lowprice = $request->lowprice;
          $articles->highprice = $request->highprice;
          $articles->save();

          $user = Auth::user();
          $articles = articles::with('User')->where('user_id',$user->id)->get();
          return view('blog',['articles'=>$articles]);
    }

    public function deleteblog($id){
        $articles = articles::where('id',$id)->first();
        $articles->delete();
        $user = Auth::user();
        $articles = articles::with('User')->where('user_id',$user->id)->get();
        return Redirect::back()->with('message','Delete Successful !');
    }
    public function editedblog($id, Request $request){
$user = Auth::user();
Validator::make($request->all(), [
    'title'   => 'required',
    'textarea' => 'required',
    'image'        => 'nullable|mimes:jpeg,png,jpg',
])->validate();
$check = $request->hasFile('image');
        if($check){
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = $request->file('image')->getClientOriginalName();
                $destinationPath = public_path('assets/images');
                $imagePath = $destinationPath. "/".  $name;
                $image->move($destinationPath, $name);
              }
            $articles = articles::where('id', $id)->first();
            $articles->user_id = $user->id;
            $articles->category_id = $request->myselect+1;
            $articles->title = $request->title;
            $articles->description = $request->textarea;
            $articles->image = $name;
            $articles->save();

        }else{
            $articles = articles::where('id', $id)->first();
            $articles->user_id = $user->id;
            $articles->category_id = $request->myselect+1;
            $articles->title = $request->title;
            $articles->description = $request->textarea;
            $articles->save();
        }
        $user = Auth::user();
        $articles = articles::with('User')->where('user_id',$user->id)->get();
        return view('blog',['articles'=>$articles]);
    }

    public function edituser(){
        $user = User::all();
        return view('edituser',['user'=>$user]);
    }
    public function informationuser($id){
        $user = User::where('id', $id)->first();

        return view('informationuser',['user'=>$user]);
    }
    public function deleteduser($id){
        $articles= articles::where('user_id',$id)->get();
        foreach ($articles as $post) {
            $post->delete();
        }
        $user = User::where('id',$id)->first();
        $user->delete();

        $user = User::all();
        return view('edituser',['user'=>$user]);
    }
    public function informationpost(){
        $post = articles::with('User')->get();
        return view('informationpost',['post'=>$post]);
    }
}
