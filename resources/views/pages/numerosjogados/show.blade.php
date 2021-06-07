@extends('template.template')

@section('show')
    <table class="table table-striped">
        <br>

        <h1 style="text-align: center;">Números Jogados</h1>
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
            <tr>
                <th scope="row">{{ $jogo->id}}</th>
                <td>{{ $jogo->concurso_id}}</td>
                <td>{{ $jogo->identificador_jogo}}</td>
                <td>{{ $jogo->created_at}}</td>
                <td width="30%">
                    <div class="acoes">
                        <a class="btn btn-primary" href="{{ route('jogo.edit', $jogo ->id)}}">Editar</a>
                        <form action="{{ route('jogo.destroy', $jogo ->id)}}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Apagar</button>
                        </form>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <center>
    <div>
        @php
            $s = 0;
        @endphp
        @for ($i = 0 ; $i < 10; $i++)
            @for ($j = 0 ; $j < 5; $j++)
                <input  value="{{$jogo->numerojogado[$s]}}">
                @php
                    $s = $s + 1;
                @endphp
            @endfor
            <br>
        @endfor
    </div>
    <br>
    <div class="btn-group mr-2" role="group" aria-label="Second group">
        <div class="acoes">
            <a class="btn btn-primary" href=" {{ route('jogo.index')}} ">Voltar</a>
        </div>
    </div>
    </center>
@endsection
