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
                        <div class="col-md-12">
                            <h4 class="card-title mt-3">Cadastrar imagem na galeria</h4>
                            <div class="card-body">
                                <form enctype="multipart/form-data" method="post"
                                      action="{{ route('inserir-galeria') }}">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-lg-6">
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
                                    <div class="card-body">
                                        <img src="{{ asset($imagem['caminho']) }}" alt="Olho Gordo" title="Olho Gordo" style="max-height: 100%;max-width: 100%;">
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
