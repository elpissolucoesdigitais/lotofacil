@extends('template.template')

@section('create')

<link rel="stylesheet" href="">

    <br>

    @if (session('message'))
        <h3 class="alert alert-warning" style="text-align:center;">
            {{session('message')}}
        </h3>
    @endif
    <br>

    <h1 style="text-align:center;">Cadastrar Cartão</h1>
    <br>

    <div class="">



        @if ($errors->any())
            <div class="alert alert-warning">
                @foreach ($errors->all() as $error)
                    <p>{{ $error}}</p>
                @endforeach
            </div>
        @endif



        <form action=" {{ route('cartoes.store')}} " method="POST">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="identificador_jogo" placeholder="Número do Identificador Cartão" aria-label="Número do Concurso" aria-describedby="basic-addon2">

                <div class="dropdown">
                    <div aria-labelledby="dropdownMenuButton">
                        <select class="btn btn-success dropdown-toggle" name="concurso_id" id="inputConcurso_id">
                            <option value="">Concurso</option>
                                @foreach ($concursos as $concurso)
                                    <option name="{{$concurso->identificador_concurso}}" value="{{$concurso->identificador_concurso}}">
                                        Concurso - {{$concurso->identificador_concurso}}
                                    </option>
                                @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <table class="">
                <thead>
                    <h2 style="text-align:center;">Insira os Números Abaixo</h2>
                </thead>

                @php
                    $s = 0;

                @endphp

                <center>
                    <div class="table_form">
                        @for ($i = 0 ; $i < 5; $i++)
                            @for ($j = 0 ; $j < 4; $j++)
                                @php
                                    $s = $s + 1;
                                @endphp
                                <input name="numerojogado[]" placeholder="{{$s}}" >
                            @endfor
                            <br>
                        @endfor
                    </div>
                </center>


            </table>

            <!--
            <div class="btn-group mr-2" role="group" aria-label="First group">
                <button type="submit" class="btn btn-secondary btn-lg" role="toolbar">
                    Fazer Comparações
                </button>
            </div>
            -->
            <div class="d-flex justify-content-center">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button type="submit" class="btn btn-success" role="toolbar">
                            Cadastrar Cartão
                        </button>
                    </div>
                    <div class="acoes">
                        <a class="btn btn-primary" href=" {{ route('cartoes.home')}} ">Voltar</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script

@endsection
