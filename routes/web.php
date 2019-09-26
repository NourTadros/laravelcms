<?php
use App\Post;
use App\User;
use App\Country;
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

Route::get('/basicinsert',function(){
$post= new Post;
$post->title='Coldplay';
$post->content='Adventure of a lifetime';
$post->save();
});


// Route::get('/basicinsert',function(){
//     $post= Post::find(6);
//     $post->title='new eloquent title insert 2';
//     $post->content='Wooooowww Eloquent is really COOL';
//     $post->save();
//     });

// Route::get('/create',function(){
//     Post::create(['title'=>'the create method', 'content'=>'Wow i\'m learning a lot with laravel']);
// });

// Route::get('/update',function(){

//     Post::where('id',2)->where('is_admin',0)->update(['title'=>'NEW PHP title','content'=>'ana gamda gidan']);
// });

// Route::get('/delete',function(){
// Post::where('id',3)->delete();
// });

// Route::get('/deleteedwin',function(){
//     $post=Post::find(2);
//     $post->delete();
// });

// Route::get('/delete3',function(){
//         Post::destroy(2);
//     });

// Route::get('/deletemultiple',function(){
//     Post::destroy([4,5]);
// });

Route::get('/softdelete',function(){
Post::find(11)->delete();
});

// Route::get('/readsoftdelete',function(){
// $post=Post::find(6);
// return $post;
// $post=Post::withTrashed()->where('id',6)->get();
// return $post;

// $post=Post::onlyTrashed()->where('is_admin',0)->get();
// return $post;
// });

// Route::get('/restore',function(){
// Post::withTrashed()->where('is_admin',0)->restore();
// });

// Route::get('/forcedelete',function(){

//     Post::onlyTrashed()->where('is_admin',0)->forceDelete();
// });

/////////////////////// ELOQUENT RELATIONSHIPS///////////////////////

/////one to one relationship/////

Route::get('/user/{id}/post',function($id){
    return User::find($id)->post->title;



});

Route::get('/post/{id}/user',function($id){
return Post::find($id)->user->name;
});

Route::get('/posts',function(){
$user=User::find(1);
foreach($user->posts as $post){

    echo $post->title."<br>";

}
});


//Many to many

// Route::get('/user/{id}/role',function($id){

//     $user=User::find($id)->roles()->orderBy('id','desc')->get();
//     return $user;

    // foreach($user->roles as $role){
    //     return $role->name;
    // }



// });

//Accessing pivot table

// Route::get('user/pivot',function(){

//     $user=User::find(1); 

//     foreach($user->roles as $role){
//         return $role->pivot->created_at;
//     }
// });

// Route::get('/user/country',function(){
// $country=Country::find(6);
// foreach ($country->posts as $post){
//     return $post->title;
// }
// });




