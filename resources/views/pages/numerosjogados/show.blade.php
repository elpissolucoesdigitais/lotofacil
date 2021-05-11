@extends('template.template')

@section('show')
    <table class="table table-striped">
      <h1>Números Jogados</h1>
        <tbody>
            <tr>
                <td>{{ $cartao ->nj1}}</td>
                <td>{{ $cartao ->nj2}}</td>
                <td>{{ $cartao ->nj3}}</td>
                <td>{{ $cartao ->nj4}}</td>
                <td>{{ $cartao ->nj5}}</td>
            </tr>
            <tr>
                <td>{{ $cartao ->nj6}}</td>
                <td>{{ $cartao ->nj7}}</td>
                <td>{{ $cartao ->nj8}}</td>
                <td>{{ $cartao ->nj9}}</td>
                <td>{{ $cartao ->nj10}}</td>
            </tr>
            <tr>

                <td>{{ $cartao ->nj11}}</td>
                <td>{{ $cartao ->nj12}}</td>
                <td>{{ $cartao ->nj13}}</td>
                <td>{{ $cartao ->nj14}}</td>
                <td>{{ $cartao ->nj15}}</td>
            </tr>
            <tr>
                <td>{{ $cartao ->nj16}}</td>
                <td>{{ $cartao ->nj17}}</td>
                <td>{{ $cartao ->nj18}}</td>
                <td>{{ $cartao ->nj19}}</td>
                <td>{{ $cartao ->nj20}}</td>
            </tr>
        </tbody>
    </table>


    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-secondary btn-lg" role="toolbar">
            <a href="{{ route('cartoes.index')}}">Voltar</a>
        </button>
        <button type="button" class="btn btn-warning btn-lg">
            <a href="{{ route('cartoes.edit', $cartao->id)}}">Editar</a>
        </button>
        <form action="{{ route('cartoes.destroy', $cartao ->id)}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger">Apagar</button>
        </form>
    </div>
@endsection


















