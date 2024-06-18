<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



// Route::get('/admin', function () {
//     return "you are in admin mode ";
// });


// // Route::get('/post/{id}/{name}', function($id,$name){
// //     return "This is the post page your id is ".$id." 
// //     and name".$name;
// // });

// Route::get('/admin/posts/examples', array('as'=>'admin.home' , function(){
//     $url = route('admin.home');
//     return "This is the route you've been hitting on".$url;
// }));

Route::get('/post/{id}', [PostController::class, 'index']);
//Route::get('/post','App/Http/Controllers/PostController@index');

Route::get('/contact',[PostController::class,'contact']);

Route::get('/post/{id}/{name}/{password}',[PostController::class,'post']);
