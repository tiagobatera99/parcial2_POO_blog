<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtigoController extends Controller
{
    public function index(){
        $artigos = Artigo::all();
        return $artigos;
    }
}


/*Book
Bookcontroller
/books
index*/