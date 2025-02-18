<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
 
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

Route::get('prueba' , function(){

    /*

    Crear nuevo post

    $post = new Post;
    $post->title = 'Ttitulo de la prueba 2';
    $post->content = 'Contenido de prueba 2';
    $post->categoria = 'Categoria de la prueba 2';

    $post->save();

    return $post;

    */

   /*  $post = Post::find(1); buscar post por id*/

    $post = Post::where('title' , 'Titulo de prueba 1') ->first();
                /*->first();*/
    $post->categoria = 'Desarrollo web';
    $post->save();

    return $post;
});