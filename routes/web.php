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
  
    //crear entradas nuevas 
    /* 
    $post = new Post;
    $post->title = 'TiTuLo DE prueBA 4';
    $post->content = 'Contenido de prueba 4';
    $post->categoria = 'Categoria de la prueba 4';

    $post->save();

    return $post;
*/
    $post = Post::find(4); //buscar post por id
    return $post;
   /*
   actualizacion de un registro
    $post = Post::where('title' , 'Ttitulo de la prueba 1')->first();
                ////////*->first();
    $post->categoria = 'Desarrollo web';
    $post->save();

    return $post;
    */

    //formas de listar registros 
    //$posts = Post::all(); //trae a pnatalla todas los registros
   //$posts = Post::where('id' , '>=' , '2') ->get(); trae los registros mayores o iguales a dos 
   //$posts = Post::orderBy('id' , 'desc') -> get(); muestra los registros de manera descendente
   //$posts = Post::orderBy('categoria' , 'asc')->select('id' , 'title' , 'categoria') ->take(2)->get(); 

   /* eliminar una entrada en especifico
    $post = Post::find(1);
    $post->delete();    
    return "Eliminado Correctamente"; */

});