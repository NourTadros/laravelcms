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
    public function delete(){

    }
   
    public function edit($id){

    }
}
