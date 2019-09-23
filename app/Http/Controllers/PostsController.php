<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index($id){
        return 'INDEX ' .$id;
    }
    //
    public function show($id){

        return "this is the show method" . $id;
    }

    public function create(){
        return "I am the method that creates stuff";
    }
    public function destroy($id){

    }
   
    public function edit($id){

    }
    public function update(Request $request,$id){

    }


public function contact(){
    return view('contact');
}
public function show_post($id,$name,$password){

    // return view('post')->with('id',$id);
    return view('post',compact('id','name','password'));

}


}
