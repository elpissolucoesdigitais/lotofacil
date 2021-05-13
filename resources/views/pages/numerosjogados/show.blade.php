@extends('template.template')

@section('show')
    <table class="table table-striped">
      <h1>Números Jogados</h1>
      <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Identificador</th>
            <th scope="col">Data de Cadastro</th>
            <th scope="col">Ação</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$cartao->id}}</td>
                <td>{{ $cartao->numerojogado[0]}}</td>
            </tr>
        </tbody>
    </table>


    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-success btn-lg" role="toolbar">
            <a href="{{ route('cartoes.index')}}">Voltar</a>
        </button>
        <button type="button" class="btn btn-primary btn-lg">
            <a href="{{ route('cartoes.edit', $cartao->id)}}">Editar</a>
        </button>
        <form action="{{ route('cartoes.destroy', $cartao ->id)}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger">Apagar</button>
        </form>
    </div>
@endsection


















