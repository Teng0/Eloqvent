<?php

use Illuminate\Support\Facades\Hash;
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
//    \App\Tag::create([
//        'name'=>"Laravel"
//    ]);
//    $posts->tags()->sync([1=>[
//        'status'=>'approved'
//    ]]);
    $posts->tags()->detach([1=>[
        'status'=>'approved'
    ]]);

    return view("posts.index",compact('posts'));

});

Route::get('/tags', function () {

//    $tags = \App\Tag::with("posts")->get();
//    return view("tags.index",compact('tags'));
});

Route::get('/projects', function () {
//    $project=\App\Project::create([
//        'title'=>"Project B"
//    ]);
//    $user3= \App\User::create([
//        'name'=>"user3",
//        "email"=>"user3@example.com",
//        "password"=> Hash::make('password'),
//        "project_id"=>$project->id
//        ]);
//    $user4=\App\User::create([
//        'name'=>"user4",
//        "email"=>"user4@example.com",
//        "password"=> Hash::make('password'),
//        "project_id"=>$project->id
//    ]);
//    $user5=\App\User::create([
//        'name'=>"user5",
//        "email"=>"user5@example.com",
//        "password"=> Hash::make('password'),
//        "project_id"=>$project->id
//    ]);
//
//    $task1 = \App\Task::create([
//        'title'=>"Task1 for user3 project B",
//        'user_id'=>$user3->id
//    ]);
//    $task2 = \App\Task::create([
//        'title'=>"Task3 for user1 project B",
//        'user_id'=>$user3->id
//    ]);
//    $task3 = \App\Task::create([
//        'title'=>"Task4 for user4 project B",
//        'user_id'=>$user4->id
//    ]);
//    $task4 = \App\Task::create([
//        'title'=>"Task4 for user5 project B",
//        'user_id'=>$user5->id
//    ]);

    $project = \App\Project::find(1);
    return $project->tasks;
});

Route::get('/projects2', function () {
//
//    $project1=\App\Project::create([
//        'title'=>"Project A"
//    ]);
//
//    $project2=\App\Project::create([
//        'title'=>"Project B"
//    ]);
//
//    $user1= \App\User::create([
//        'name'=>"user1",
//        "email"=>"user1@example.com",
//        "password"=> Hash::make('password'),
//        ]);
//
//    $user2= \App\User::create([
//        'name'=>"user2",
//        "email"=>"user2@example.com",
//        "password"=> Hash::make('password'),
//    ]);
//    $user3= \App\User::create([
//        'name'=>"user3",
//        "email"=>"user3@example.com",
//        "password"=> Hash::make('password'),
//
//    ]);
//
//    $project1->users()->attach($user1);
//    $project1->users()->attach($user2);
//    $project1->users()->attach($user3);
//
//    $project2->users()->attach($user1);
//    $project2->users()->attach($user3);

// $project1= \App\Project::find(1);
// return $project1->users;


//    \App\Task::create([
//        "title"=>"Task A",
//        'user_id'=>1
//    ]);
//
//    \App\Task::create([
//        "title"=>"Task B",
//        'user_id'=>1
//    ]);
//    \App\Task::create([
//        "title"=>"Task A",
//        'user_id'=>2
//    ]);
//    \App\Task::create([
//        "title"=>"Task A",
//        'user_id'=>3
//    ]);

    $project =\App\Project::find(1);
   // dd($project->users);
  // return $project->tasks;

  $user=  \App\User::find(1);
  return $project->tasks;
});

Route::get('/comments', function () {
//    $user1= \App\User::create([
//        'name'=>"user1",
//        "email"=>"user1@example.com",
//        "password"=> Hash::make('password'),
//        ]);
//    $post = \App\Post::create([
//        "user_id"=>1,
//        "title"=>"Title 1"
//    ]);
//    $post=\App\Post::find(1)->comments()::create([
//        "user_id"=>1,
//        "body"=>"Comment for post"
//    ]);

//    $post=\App\Post::find(1);
//    //$post->comments()->create(['user_id'=>1,"body"=>"comment for post"]);
//    $post->comments()->create(['user_id'=>1,"body"=>"comment for post2"]);
//    return $post->comments;

    $video = \App\Video::create([
        'user_id'=>1,
        "title"=>"User 1 Video"
    ]);
    $video->comments()->create([
        'user_id'=>1,
        'body'=>"video Body for user 1"
    ]);

    return $video->comments;


});

Route::get('/PostTags', function () {
//    $post = \App\Post::create([
//        'user_id'=>1,
//        "title"=>"Post Tag"
//    ]);
//    $post->tags()->create([
//        'name'=>"laravel"
 //   ]);
//

    $video = \App\Video::create([
        'title'=>"Video Title 1"
    ]);
    $tag = \App\Tag::find(1);

    $video->tags()->attach($tag);
});
