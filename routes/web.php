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


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

use App\Post;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Country;

/*Route::get('/insert', function (){
    DB::insert('insert into posts(title, body) values(?,?)', ['PHP with laravel again', 'The best thing that happened to me is PHP']);
});*/

/*Route::get('/read', function (){

    $results = DB::select('select * from posts where id = ?', [1]);

    foreach ($results as $result){
        return $result->title;
    }
});*/

/*Route::get('/update', function (){

   $updated = DB::update('update posts set title = "Update title" where id = ?', [1]);

   return $updated;
});*/

/*Route::get('/delete', function (){

    $deleted = DB::detele('delete from posts where id = ?', [1]);

    return $deleted;
});*/

/*Route::get('/delete', function (){
    $post = Post::find(5);

    $post->delete();
});*/


/*Route::get('/basicinsert', function (){

    $post = new Post();

    $post->title = 'New Eloquent title insert';
    $post->body = 'New eloquent is really cool, yeah!!!!';

    $post->save();
});*/



/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', 'PostsController@showView');

Route::get('/post/{id}', 'PostsController@show_post');*/


/*Route::resource('/posts', 'PostsController');*/


/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
*/

/*Route::get('/read', function (){

    $posts = Post::all();

    foreach ($posts as $post){
        return $post->title;
    }
});*/

//Route::get('/create', function (){
//
//    Post::create(['title'=>'The created method 3', 'body'=>'Wow I\'m learning alot with Diaz 3']);
//});


/*Route::get('/find', function (){

    $posts = Post::find(2);

    return $posts->title;
//    foreach ($posts as $post){
//        return $post->title;
//    }
});*/

//Route::get('/softdelete', function (){
//
//    Post::find(2)->delete();
//
//});

//Route::get('/readsoftdelete', function (){
//
////    $post = Post::withTrashed()->where('id', 2)->get();
////
////    return $post;
//
////    $post = Post::onlyTrashed()->where('is_admin', 1)->get();
////
////    return $post;
//
////    $post = Post::find(2);
////
////    return $post;
//
//});


//Route::get('/restore', function (){
//
//    Post::withTrashed()->where('is_admin', 1)->restore();
//
//});

/*Route::get('/forcedelete', function (){

    Post::withTrashed()->where('is_admin', 1)->forceDelete();

});*/


/*
|--------------------------------------------------------------------------
| ELOQUENT RELATIONSHIP
|--------------------------------------------------------------------------
*/


// one to one relationship
//Route::get('/user/{id}/post', function ($id){
//
//    return User::find($id)->post->body;
//
//});
//
//
//Route::get('/post/{id}/user', function ($id){
//
//    return Post::find($id)->user->name;
//
//});


// One to many relationship
//Route::get('/posts', function (){
//
//    $user = User::find(1);
//
//    foreach ($user-> posts as $post){
//
//         echo $post->title . "<br>";
//
//    }
//
//});

//Many to many relationship 1
//Route::get('/user/{id}/role', function ($id){
//    $users = User::find($id);
//
//    foreach ($users->roles as $role){
//        echo $role->name;
//
//    }
//});

//Many to many relationship 2
//Route::get('/user/{id}/role', function ($id){
//    $users = User::find($id)->roles()->orderBy('id', 'desc')->get();
//
//    return $users;
//});

//Accessing pivot table {intermediate table}

//Route::get('user/pivot', function (){
//
//    $user = User::find(1);
//
//    foreach ($user->roles as $role) {
//
//        echo $role->pivot->created_at;
//    }
//
//});


//has many through relationship
Route::get('/user/country', function (){

    $country = Country::find(3);

    foreach ($country->posts as $post ){
        return $post->title;
    }

});

Route::group(['middleware'=>'web'], function (){

    Route::resource('/posts', 'PostsController');


});




























