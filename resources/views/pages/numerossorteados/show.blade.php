@extends('template.template')

@section('show')
    <table class="table table-striped">
        <br>
      <h1 style="text-align: center;"> Números Sorteados</h1>
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
                <th scope="row">{{ $sorteado->id}}</th>
                <td>{{ $sorteado->identificador}}</td>
                <td>{{ $sorteado->created_at}}</td>
                <td width="30%">
                    <button type="button" class="btn btn-primary">
                        <a href="{{ route('sorteados.edit', $sorteado ->id)}}">Editar</a>
                    </button>
                    <form action="{{ route('sorteados.destroy', $sorteado ->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Apagar</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
    <center>
    <div class="table_form">
        @php
            $s = 0;
        @endphp
        @for ($i = 0 ; $i < 5; $i++)
            @for ($j = 0 ; $j < 4; $j++)
                <input type="number" name="numerosorteado[]" value="{{$sorteado->numerosorteado[$s]}}" placeholder="{{$s}}">
                @php
                    $s = $s + 1;
                @endphp
            @endfor
            <br>
        @endfor
    </div>
    <br>
    <div class="btn-group mr-2" role="group" aria-label="Second group">
        <button type="submit" class="btn btn-secondary btn-lg" role="toolbar">
            <a href=" {{ route('cartoes.home')}} "> Voltar </a>
        </button>
    </div>
    </center>
@endsection


















