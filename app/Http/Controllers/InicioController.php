<?php

namespace App\Http\Controllers;

use App\Galeria;

class InicioController extends Controller
{
    public function index()
    {
        $clientes = collect(glob('template/imagens/clientes/*.png'));
        $galeria = collect(glob('template/imagens/galeria/*.png'));
        return view('welcome', compact('clientes', 'galeria'));
    }
}
