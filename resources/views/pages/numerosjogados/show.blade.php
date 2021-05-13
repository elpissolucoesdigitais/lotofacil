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
                <th scope="row">{{ $cartao->id}}</th>
                <td>{{ $cartao->identificador}}</td>
                <td>{{ $cartao->created_at}}</td>
                <td width="30%">
                    <button type="button" class="btn btn-primary">
                        <a href="{{ route('cartoes.edit', $cartao ->id)}}">Editar</a>
                    </button>
                    <form action="{{ route('cartoes.destroy', $cartao ->id)}}" method="post">
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
                <input type="number" name="numerojogado[]" value="{{$cartao->numerojogado[$s]}}" placeholder="{{$s}}">
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
            <a href=" {{ route('cartoes.index')}} "> Voltar </a>
        </button>
    </div>
    </center>
@endsection


















