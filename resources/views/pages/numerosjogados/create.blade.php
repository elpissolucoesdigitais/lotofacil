@extends('template.template')

@section('create')
    <h1>Concurso Atual</h1>

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Pesquisar seus Concursos" aria-label="Pesquisar seus Concursos" aria-describedby="basic-addon2">
        <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="button"><svg class="Cur(p)" width="60" style="fill: black ;stroke:black;stroke-width:0;vertical-align:bottom" height="24" viewBox="0 0 24 24" data-icon="search"><path d="M9 3C5.686 3 3 5.686 3 9c0 3.313 2.686 6 6 6s6-2.687 6-6c0-3.314-2.686-6-6-6m13.713 19.713c-.387.388-1.016.388-1.404 0l-7.404-7.404C12.55 16.364 10.85 17 9 17c-4.418 0-8-3.582-8-8 0-4.42 3.582-8 8-8s8 3.58 8 8c0 1.85-.634 3.55-1.69 4.905l7.403 7.404c.39.386.39 1.015 0 1.403"></path></svg></button>
        </div>
    </div>

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


            <table class="table table-striped">
                <thead>
                    <h2>Insira os Números Abaixo</h2>
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
                            <a href=" {{ route('cartoes.index')}} "> Voltar </a>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection





