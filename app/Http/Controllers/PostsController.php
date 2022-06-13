<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Usuario;

class PostsController extends Controller
{
    public function index(){
        $posts = post::all();
        $usuarios = Usuario::all();
        return view('posts.index', compact('posts','usuarios'));
    }

    public function store(Request $request){
        $post = new Post();
        $post->titulo = $request->titulo;
        $post->subtitulo = $request->subtitulo;
        $post->tema = $request->tema;
        $post->link = $request->link;
        $post->imagen = $request->imagen;
        $post->usuario_id = $request->usuario;
        $post->save();
        return redirect()->route('posts.index');
    }
}
