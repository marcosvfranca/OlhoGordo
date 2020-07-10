@extends('layouts.app', ['activePage' => 'galeria', 'titlePage' => __('Olho Gordo - Admin - Galeria')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="card card-plain">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">Galeria olho gordo</h4>
                        <p class="card-category">Selecione imagens no formato .jpeg ou .png de preferência</p>
                    </div>
                    <div class="row">
                        <div class="col-md-12 card">
                            <h4 class="card-title mt-3">Cadastrar imagem na galeria</h4>
                            <div class="card-body">
                                <form enctype="multipart/form-data" method="post"
                                      action="{{ route('inserir-galeria') }}">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-3 col-sm-12 col-lg-3">
                                            <input type="text" name="titulo" class="form-control" placeholder="Título">
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-lg-4">
                                            <input type="text" name="texto" class="form-control" placeholder="Texto">
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-lg-4">
                                            <input type="file" class="form-control" name="imagem">
                                        </div>
                                        <div class="form-group col-md-6 col-sm-12 col-lg-6">
                                            <button type="submit" class="btn btn-warning">Cadastrar imagem</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <h4 class="card-title mt-1">Imagens cadastradas</h4>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($imagens as $imagem)
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img src="{{ asset($imagem['caminho']) }}" alt="Olho Gordo" title="Olho Gordo" style="max-height: 100%;max-width: 100%;">
                                        <h5 class="mt-3" style="font-family: 'Poppins',sans-serif; color: #222; line-height: 1.2em !important;">{{ $imagem['titulo'] }}</h5>
                                        <p>{{ $imagem['texto'] }}</p>
                                    </div>
                                    <div class="card-footer">
                                        <a class="btn btn-warning btn-block" href="{{ route('deletar-galeria', ['id' => $imagem['id']]) }}">Excluir imagem</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
