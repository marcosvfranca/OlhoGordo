<?php

namespace App\Http\Controllers;

use App\Galeria;

class InicioController extends Controller
{
    public function index()
    {
        $imagens = Galeria::orderBy('created_at', 'desc')->get();

        return view('welcome', compact('imagens'));
    }
}
