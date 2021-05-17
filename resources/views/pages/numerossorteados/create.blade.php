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

    <h1 style="text-align:center;">Cadastrar numeros sorteados</h1>
    <br>

    <div class="">



        @if ($errors->any())
            <div class="alert alert-warning">
                @foreach ($errors->all() as $error)
                    <p>{{ $error}}</p>
                @endforeach
            </div>
        @endif
        <form action=" {{ route('sorteados.store')}} " method="POST">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="identificador_concurso" placeholder="Número do Identificador Concurso" aria-label="Número do Concurso" aria-describedby="basic-addon2">
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
                                <input type="number" name="numerosorteado[]" value="numerosorteado[{{$s}}]" placeholder="{{$s}}">
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
                        <button type="submit" class="btn btn-secondary btn-lg" role="toolbar">
                            Cadastrar Concurso
                        </button>
                    </div>
                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                        <button type="submit" class="btn btn-secondary btn-lg" role="toolbar">
                            <a href=" {{ route('cartoes.home')}} "> Voltar </a>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection





