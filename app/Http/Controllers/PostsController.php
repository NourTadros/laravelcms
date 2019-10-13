<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\CreatePostRequest;


class PostsController extends Controller
{
    public function index(){

        $posts=Post::latest()->get();
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
        $post=Post::whereId($id)->delete();
        // $post->delete();
        return redirect('/posts');
    }
   
    public function edit($id){
        $post=Post::findOrFail($id);
        return view('post.edit',compact('post'));

    }
    public function update(Request $request,$id){

        $post=Post::findOrFail($id);

        $post->update($request->all());

        return redirect('/posts');
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
    public function store(CreatePostRequest $request){


$file=$request->file('file');

echo "<br>";

echo $file->getClientOriginalName();

echo "<br>";

echo $file->getClientSize();



// $this->validate($request,[

// 'title'=>'required'
// 'content'=>'required'

// ]);


    // return $request->all();

    // Post::create($request->all());
    // return redirect('/posts');

    // $input=$request->all();
    // $input['title']=$request->title;
    // Post::create($request->all());

    // $post=new Post;
    // $post->title=$request->title;
    // $post->save();
}


}
 