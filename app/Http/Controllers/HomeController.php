<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        /* dd('hola mundo'); */
        return view('home.index');
    }

    public function login(){
        return view('home.login');
    }
}
