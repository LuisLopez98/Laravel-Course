<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
 
Route::get('/', HomeController::class);

/*
Route::get('/', [HomeController::class, 'index']);
*/

/*
Route::get('/', function () {
    return "welcome to the hompage";
});
*/ 

Route::get('/posts', [PostController::class, 'index']);
/* 
Route::get('/posts', function () {
    return "welcome aqui se mostraran todos los posts";
});
*/

Route::get('/posts/create', [PostController::class, 'create']);
/*
Route::get('/posts/create', function () {
    return "aqui se mostrara la opcion para crear un formulario";
});
*/

Route::get('/posts/{post}', [PostController::class, 'show']);
/*
Route::get('/posts/{post}', function ($post) {
    return "welcome aqui se mostrara el post {$post}"; 
});

*/
