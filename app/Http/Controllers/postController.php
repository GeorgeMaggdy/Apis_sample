<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
// use App\Http\Controllers\DB;
use Illuminate\Support\Facades\DB;

 
class postController extends Controller
{

    public function home(){

        return view('posts.home');
    }
    public function create(){

        return view('posts.create');
    }

    public function store(request $request){
 $request->validate([

    'title'=>'required',
    'posted_by'=>'required'
 ]);
        $post=new post();
        $post->title=$request->title;
        $post->posted_by=$request->posted_by;
        $post->save();
        return redirect()->route('posts.show');
    }

    

    public function show(){
        $posts=DB::table('posts')->get();
       
        return view('posts.home',compact('posts'));

    }

    public function view($id){

     $posts=post::findorfail($id);
     return view('posts.view',compact('posts'));
    }


    public function onlyview($id){

        $posts=post::findorfail($id);
        return view('posts.onlyview',compact('posts'));
       }
   


    public function edit($id,request $request){


        $request->validate([

            'title'=>'required',
            'posted_by'=>'required'
         ]);
         
        $post=post::findorfail($id);
        $post->update([
       'title'=>$request->title,
       'posted_by'=>$request->posted_by

        ]);
        return redirect()->route('posts.show');
       }

       public function delete($id){

        post::findorfail($id)->delete();
        return redirect()->route('posts.show');
       }
   
}


