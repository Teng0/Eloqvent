<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/users', function () {
   // factory(\App\User::class,3)->create();
//    \App\Address::create([
//        'user_id'=>1,
//        "country"=>"Tbilisi"
//    ]);
//    \App\Address::create([
//        'user_id'=>2,
//        "country"=>"Georgia"
//    ]);
//    \App\Address::create([
//        'user_id'=>3,
//        "country"=>"Mesxeti"
//    ]);

 //   $users = \App\User::all();
    //sdd($users);
 //  $user = factory(\App\User::class)->create();
//    \App\Address::create([
//        'user_id'=>$user->id,
//        'country'=>"Mcxeta"
//    ]);

//$user->address()->create([
//    'country'=>'UK'
//]);

   // $addresses = \App\Address::all();
    $addresses = \App\Address::with('user')->get();

    $users =  \App\User::has("posts")->with("posts")->get();
    $users =  \App\User::whereHas("posts",function ($query){
        $query->where("title",'like','%User%');
    })->with('posts')->get();
    $users =  \App\User::doesntHave('posts')->with('posts')->get();



    //dd($users);
    return view("users.index",compact('users'));

});
Route::get('/posts', function () {
//    \App\Post::create([
//        "user_id"=>1,
//        "title"=>"User1 Title"
//    ]);
//    \App\Post::create([
//        "user_id"=>2,
//        "title"=>"User2 Title"
//    ]);
//    \App\Post::create([
//        "user_id"=>3,
//        "title"=>"User3 Title"
//    ]);
  //  \App\Tag::create([
//        'name'=>"Laravel"
//    ]);
//    \App\Tag::create([
//        'name'=>"PHP"
//    ]);
//    \App\Tag::create([
//        'name'=>"Javascript"
//    ]);

//    $posts = \App\Post::with("user")->get();
//    $post = \App\Post::first();
    //$tag = \App\Tag::first();
   // $post->tags()->attach($tag);
//    $post->tags()->attach([2,3]);

    //$posts = \App\Post::with(['user','tags'])->get();
    $posts = \App\Post::with(['user','tags'])->first();
         //$posts->tags()->detach([2]);
    $posts->tags()->sync([2,3]);
    return view("posts.index",compact('posts'));

});

