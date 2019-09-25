<?php
use App\Post;

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
// Route::get('post/{id}/{name}/{password}','PostsController@show_post');


//INSERT RAW SQL QUERIES
Route::get('/insert',function(){
    DB::insert('insert into posts(title,content) values(?,?)',['PHP with laravel','PHP Laravel is the best thing with stomach ache']);
});


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



//Eloquent

// Route::get('/read',function(){
//     $posts=Post::all();

//     foreach($posts as $post){
//         return $post->title;

//     }
// });

// Route::get('/find',function(){
//     $post=Post::find(2);

//     return $post->title;

    
// });


// Route::get('/search',function(){
//     $posts=Post::where('id',2)->orderBy('id','asc')->take(1)->get();
//     return $posts;
// });




// Route::get('/findmore',function(){

// // $posts=Post::findOrFail(2);
// $posts=Post::where('users_count','<',50)->firstOrFail();

// return $posts;

// });

// Route::get('/basicinsert',function(){
// $post= new Post;
// $post->title='new ORM title';
// $post->content='Wooooowww Eloquent is really COOL';
// $post->save();
// });


// Route::get('/basicinsert',function(){
//     $post= Post::find(2);
//     $post->title='new eloquent title insert 2';
//     $post->content='Wooooowww Eloquent is really COOL';
//     $post->save();
//     });

// Route::get('/create',function(){
//     Post::create(['title'=>'the create method', 'content'=>'Wow i\'m learning a lot with laravel']);
// });

Route::get('/update',function(){

    Post::where('id',2)->where('is_admin',0)->update(['title'=>'NEW PHP title','content'=>'ana gamda gidan']);
});