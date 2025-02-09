<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "Aqui se mostraran todos los posts desde PostController";
    }

    public function create()
    {
        return "aqui se mostrara la opcion para crear un formulario desde PostController";
    }

    public function show($post)
    {
        return "welcome aqui se mostrara el post {$post} desde PostController";
    }
}
