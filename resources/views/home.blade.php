@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <painel titulo="Dashboard">
                    Conteudo do Curso

                    <div class="row">

                        <div class="col-md-4">
                            <painel titulo="Titulo 1" cor="panel-success">
                                Conteudo do Curso
                            </painel>
                        </div>

                        <div class="col-md-4">
                            <painel titulo="Titulo 2" cor="panel-info">
                                Conteudo do Curso
                            </painel>
                        </div>

                        <div class="col-md-4">
                            <painel titulo="Titulo 2" cor="panel-danger">
                                Conteudo do Curso
                            </painel>
                        </div>

                    </div>
                </painel>
            </div>
        </div>
    </div>

@endsection
