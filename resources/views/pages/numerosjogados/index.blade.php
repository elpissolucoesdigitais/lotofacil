@extends('template.template')

@section('index')

@if (session('message'))
    <h3>
        {{session('message')}}
    </h3>

@endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Identificador</th>
            <th scope="col">Data de Cadastro</th>
            <th scope="col">Ação</th>
        </tr>
        </thead>
        <tbody>
            @foreach ( $cartoes as $cartao)
                <tr>
                    <th scope="row">{{ $cartao ->id}}</th>
                    <td>{{ $cartao ->identificador}}</td>
                    <td>{{ $cartao ->created_at}}</td>
                    <td width="30%">
                        <button type="button" class="btn btn-primary">
                            <a href="{{ route('cartoes.show', $cartao ->id)}}" >Vizualizar</a>
                        </button>
                        <button type="button" class="btn btn-warning">
                            <a href="{{ route('cartoes.edit', $cartao ->id)}}">Editar</a>
                        </button>
                        <form action="{{ route('cartoes.destroy', $cartao ->id)}}" method="post">
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

