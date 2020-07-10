<?php

namespace App\Http\Controllers;

use App\Galeria;
use Illuminate\Http\Exceptions\PostTooLargeException;
use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    public function index()
    {
        $imagens = Galeria::orderBy('created_at', 'desc')->get();
        return view('pages.galeria', compact('imagens'));
    }

    public function inserir(Request $request)
    {
        $request->file('imagem')->store('uploads',['disk' => 'public']);
        $dir = 'storage/uploads/' . $request->file('imagem')->hashName();

        Galeria::create(['caminho' => $dir, 'titulo' => $request['titulo'], 'texto' => $request['texto']]);

        return redirect('galeria');
    }

    public function deletar($id)
    {
        $imagem = Galeria::find($id);

        $imagem->delete();

        return redirect('galeria');
    }

}
