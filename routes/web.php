<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sheets\Facades\Sheets;

Route::get('/', function () {
    $post = Sheets::collection('posts')->all();
    return view('posts.index', ['post'=> $post]);
});


Route::get('/post/{post}', function ($post) {

    return view('posts.show', ['post'=>$post]);
});