<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index(){

        $posts=Post::all();
        return view('post.index',compact('posts'));
    }
    //
    public function show($id){

        $post=Post::findOrFail($id);
        return view('post.show',compact('post'));
    }

    public function create(){
        return view('post.create');
    }
    public function destroy($id){

    }
   
    public function edit($id){
        $post=Post::findOrFail($id);
        return view('posts.edit',compact('post'));

    }
    public function update(Request $request,$id){

    }


public function contact(){

    // $people = ['Katy','Haidy','Nada','Shazly','Khurshid'];
    $people=[];
    return view('contact',compact('people'));
}
public function show_post($id,$name,$password){

    // return view('post')->with('id',$id);
    return view('post',compact('id','name','password'));

}
public function store(Request $request){



    // return $request->all();
    Post::create($request->all());
    return redirect('/posts');

    // $input=$request->all();
    // $input['title']=$request->title;
    // Post::create($request->all());

    // $post=new Post;
    // $post->title=$request->title;
    // $post->save();
}


}
 