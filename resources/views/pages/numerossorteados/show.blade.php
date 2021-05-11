@extends('template.template')

@section('show')
    <table class="table table-striped">
      <h1>Números Sorteados</h1>
        <tbody>
            <tr>
                <td>{{ $sorteado->ns1}}</td>
                <td>{{ $sorteado->ns2}}</td>
                <td>{{ $sorteado->ns3}}</td>
                <td>{{ $sorteado->ns4}}</td>
                <td>{{ $sorteado->ns5}}</td>
            </tr>
            <tr>
                <td>{{ $sorteado->ns6}}</td>
                <td>{{ $sorteado->ns7}}</td>
                <td>{{ $sorteado->ns8}}</td>
                <td>{{ $sorteado->ns9}}</td>
                <td>{{ $sorteado->ns10}}</td>
            </tr>
            <tr>

                <td>{{ $sorteado->ns11}}</td>
                <td>{{ $sorteado->ns12}}</td>
                <td>{{ $sorteado->ns13}}</td>
                <td>{{ $sorteado->ns14}}</td>
                <td>{{ $sorteado->ns15}}</td>
            </tr>
            <tr>
                <td>{{ $sorteado->ns16}}</td>
                <td>{{ $sorteado->ns17}}</td>
                <td>{{ $sorteado->ns18}}</td>
                <td>{{ $sorteado->ns19}}</td>
                <td>{{ $sorteado->ns20}}</td>
            </tr>
        </tbody>
    </table>
    <button type="button" class="btn btn-secondary btn-lg" role="toolbar">
        <a href="{{ route('sorteados.index')}}">Voltar</a>
    </button>
    <button type="button" class="btn btn-warning btn-lg">
        <a href="{{ route('sorteados.edit', $sorteado->id)}}">Editar</a>
    </button>
    <form action="{{ route('sorteados.destroy', $sorteado->id)}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-danger">Apagar</button>
    </form>
@endsection


















