<?php

use App\Http\Controllers\postsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/iti",function(){
return '<h1>hello from laravel ITI</h1>';
});

// Route::get('/posts',function(){
//     return view('posts');
// });
// Route::get('users',function(){
//  $users=[["id"=>1,"name"=>'yaser',"email"=>"user1@u1.com","image"=>"pin1.png"],
//  ["id"=>2,"name"=>'mohamed',"track"=>"php","email"=>"user2@u1.com","image"=>"pin2.png"],
//  ["id"=>3,"name"=>'ahmed',"track"=>"dotnet","email"=>"user3@u1.com","image"=>"pin3.png"],
//  ["id"=>4,"name"=>'mostafa',"track"=>"dotnet","email"=>"user4@u1.com","image"=>"pin4.png"]
// ];
// return $users;
// });
// Route::get("/std/{name}",function($name){
//     $users1=[
//         ["id"=>1,"name"=>'yaser',"track"=>"php","email"=>"user1@u1.com","image"=>"pin1.png"],
//         ["id"=>2,"name"=>'mohamed',"track"=>"php","email"=>"user2@u1.com","image"=>"pin2.png"],
//         ["id"=>3,"name"=>'ahmed',"track"=>"dotnet","email"=>"user3@u1.com","image"=>"pin3.png"],
//         ["id"=>4,"name"=>'mostafa',"track"=>"dotnet","email"=>"user4@u1.com","image"=>"pin4.png"]
//         ];

//   return "<h1>welcame Student {$name} </h1>" ; 
// });
// list all posts
Route::get("/posts",[postsController::class, "all"])->name('posts.posts');
//show one post
Route::get("/posts/{id}",[postsController::class, "show"])->name('posts.show');
Route::get("/posts/edit/{id}",[postsController::class, "edit"])->name('posts.edit');