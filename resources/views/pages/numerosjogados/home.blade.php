@extends('template.template')

@section('content')

        <br>

        <h1 style="text-align:center;">
            Seja bem vindo ao <br>
            Sistema Loto Mania!
        </h1>

        <div class="d-flex justify-content-center">
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                        <a href="{{ route('jogo.index')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cartões Jogados</a>
                </div>
                <div class="btn-group mr-2" role="group" aria-label="Second group">
                        <a href="{{ route('jogo.create') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cadastrar Cartões Jogados</a>
                </div>
            </div>
        </div>

        <hr>

        <div class="d-flex justify-content-center">
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="Second group">
                    <a href="{{ route('concurso.index') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Concursos</a>
                </div>
            </div>

            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="Second group">
                    <a href="{{ route('concurso.create') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cadastrar Concurso</a>
                </div>
            </div>
        </div>
        <hr>

@endsection

