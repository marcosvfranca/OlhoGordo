<?php

namespace App\Http\Controllers;

use App\Galeria;

class InicioController extends Controller
{
    public function index()
    {
        $clientes = collect(glob('template/imagens/clientes/*.png'))->take(9);
        $galeria = collect(glob('template/imagens/galeria/*.png'));
        return view('welcome', compact('clientes', 'galeria'));
    }
}
