<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
     /*    dd("test"); */
        $title = "prueba";
        return view('home.home' );
    }
}
