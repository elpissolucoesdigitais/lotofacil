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

    <h1 style="text-align:center;">Cadastrar Concurso</h1>
    <br>

    <div class="">

        <form action=" {{ route('cartoes.store')}} " method="POST">
        @csrf

        @if ($errors->any())
            <div class="alert alert-warning">
                @foreach ($errors->all() as $error)
                    <p>{{ $error}}</p>
                @endforeach
            </div>
        @endif

        <div class="input-group mb-3">
            <input type="text" class="form-control" name="identificador" placeholder="Número do Identificador Concurso" aria-label="Número do Concurso" aria-describedby="basic-addon2">
        </div>

            <table class="">
                <thead>
                    <h2 style="text-align:center;">Insira os Números Abaixo</h2>
                </thead>

                <tr>
                    <td><input type="number" name="nj1" id="nj1" placeholder="01"></td>
                    <td><input type="number" name="nj2" id="nj2" placeholder="02"></td>
                    <td><input type="number" name="nj3" id="nj3" placeholder="03"></td>
                    <td><input type="number" name="nj4" id="nj4" placeholder="04"></td>
                    <td><input type="number" name="nj5" id="nj5" placeholder="05"></td>
                </tr>
                <tr>
                    <td><input type="number" name="nj6" id="nj6" placeholder="06"></td>
                    <td><input type="number" name="nj7" id="nj7" placeholder="07"></td>
                    <td><input type="number" name="nj8" id="nj8" placeholder="08"></td>
                    <td><input type="number" name="nj9" id="nj9" placeholder="09"></td>
                    <td><input type="number" name="nj10" id="nj10" placeholder="10"></td>
                </tr>
                <tr>
                    <td><input type="number" name="nj11" id="nj11" placeholder="11"></td>
                    <td><input type="number" name="nj12" id="nj12" placeholder="12"></td>
                    <td><input type="number" name="nj13" id="nj13" placeholder="13"></td>
                    <td><input type="number" name="nj14" id="nj14" placeholder="14"></td>
                    <td><input type="number" name="nj15" id="nj15" placeholder="15"></td>
                </tr>
                <tr>
                    <td><input type="number" name="nj16" id="nj16" placeholder="16"></td>
                    <td><input type="number" name="nj17" id="nj17" placeholder="17"></td>
                    <td><input type="number" name="nj18" id="nj18" placeholder="18"></td>
                    <td><input type="number" name="nj19" id="nj19" placeholder="19"></td>
                    <td><input type="number" name="nj20" id="nj20" placeholder="20"></td>

                </tr>
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





