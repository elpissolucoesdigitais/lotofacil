@extends('template.template')

@section('index')

        <br>
        <h1 style="text-align:center;">
            Seja bem vindo ao <br>
            Sistema Loto Facil!
        </h1>

        <div class="d-flex justify-content-center">
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                        <a href="{{ route('cartoes.index')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Seus Concursos</a>
                </div>
                <div class="btn-group mr-2" role="group" aria-label="Second group">
                        <a href="{{ route('cartoes.create') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cadastrar Cartões</a>
                </div>
            </div>
        </div>

        <hr>

        <div class="d-flex justify-content-center">
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="Second group">
                    <a href="{{ route('sorteados.index') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cartões Sorteados</a>
                </div>
            </div>

            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="Second group">
                    <a href="{{ route('sorteados.create') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cadastrar Cartões Sorteados</a>
                </div>
            </div>
        </div>
@endsection

