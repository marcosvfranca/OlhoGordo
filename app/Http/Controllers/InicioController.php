<?php

namespace App\Http\Controllers;

use App\Galeria;

class InicioController extends Controller
{
    public function index()
    {
        $clientes = collect(glob('template/imagens/clientes/*.{png,jpg,jpeg,gif}', GLOB_BRACE));
        $galeria = collect(glob('template/imagens/galeria_home/*.{png,jpg,jpeg,gif}', GLOB_BRACE));
        return view('welcome', compact('clientes', 'galeria'));
    }
}
