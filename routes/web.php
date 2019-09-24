<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
   
});

// Route::get('/post/{id}','PostsController@index');
// Route::resource('posts','PostsController');

Route::get('/contact','PostsController@contact');
Route::get('post/{id}/{name}/{password}','PostsController@show_post');


//INSERT RAW SQL QUERIES
// Route::get('/insert',function(){
//     DB::insert('insert into posts(title,content)[ values(?,?)',['PHP with laravel','PHP Laravel is the best thing with stomach ache']);
// });


// Route::get('/read',function(){
// $results=DB::select('select * from posts where id=? ',[1]);

// foreach($results as $post){
//     return $post->title;
// }

// });

// Route::get('/update',function(){
// $updated=DB::update('update posts set title = "PHP with laravel framework" where id=?',[1]);

// return $updated;
// });

// Route::get('/delete',function(){
// $deleted=DB::delete('delete from posts where id=?',[1]);

// return $deleted;
// });







