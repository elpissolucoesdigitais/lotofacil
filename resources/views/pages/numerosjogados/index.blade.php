@extends('template.template')

@section('index')

    <br>
    <div class="d-flex justify-content-center">
        <div class="btn-group mr-2" role="group" aria-label="Second group">
            <button type="submit" class="btn btn-secondary btn-lg" role="toolbar">
                <a href=" {{ route('cartoes.home')}} "> Voltar </a>
            </button>
        </div>
    </div>

    <br>
    <form action="{{ route('cartoes.search')}}" method="post">
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="search" id="search" class="form-control" placeholder="Pesquisar seus Concursos" aria-label="Pesquisar seus Concursos" aria-describedby="basic-addon2">
            <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit"><svg class="Cur(p)" width="60" style="fill: black ;stroke:black;stroke-width:0;vertical-align:bottom" height="24" viewBox="0 0 24 24" data-icon="search"><path d="M9 3C5.686 3 3 5.686 3 9c0 3.313 2.686 6 6 6s6-2.687 6-6c0-3.314-2.686-6-6-6m13.713 19.713c-.387.388-1.016.388-1.404 0l-7.404-7.404C12.55 16.364 10.85 17 9 17c-4.418 0-8-3.582-8-8 0-4.42 3.582-8 8-8s8 3.58 8 8c0 1.85-.634 3.55-1.69 4.905l7.403 7.404c.39.386.39 1.015 0 1.403"></path></svg></button>
            </div>
        </div>
    </form>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Concurso</th>
            <th scope="col">Identificador</th>
            <th scope="col">Data de Cadastro</th>
            <th scope="col">Ação</th>
        </tr>
        </thead>
        <tbody>
            @foreach ( $jogos as $jogo)
                <tr>
                    <th scope="row">{{ $jogo->id}}</th>
                    <td>{{ $jogo->concurso_id}}</td>
                    <td>{{ $jogo->identificador_jogo}}</td>
                    <td>{{ $jogo->created_at}}</td>

                    <td width="30%">
                        <button type="button" class="btn btn-success">
                            <a href="{{ route('cartoes.show', $jogo ->id)}}" >Vizualizar</a>
                        </button>
                        <button type="button" class="btn btn-primary">
                            <a href="{{ route('cartoes.edit', $jogo ->id)}}">Editar</a>
                        </button>
                        <form action="{{ route('cartoes.destroy', $jogo ->id)}}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Apagar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

