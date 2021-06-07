@extends('template.template')

@section('edit')
    <table class="table table-striped">
        <br>
        <h1 style="text-align:center;">Edição do Cartão Jogado</h1>
        <hr>
        <table class="table table-striped">
            <br>
            <h1 style="text-align:center;">Número Jogado</h1>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                <th scope="col">Concurso</th>
                <th scope="col">Identificador</th>
                <th scope="col">Data de Cadastro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $jogo->id}}</th>
                        <td>{{ $jogo->concurso_id}}</td>
                        <td>{{ $jogo->identificador_jogo}}</td>
                        <td>{{ $jogo->created_at}}</td>

                    </tr>
            </tbody>
        </table>

        <form action=" {{ route('jogo.update', $jogo->id)}}  " method="POST">
            @method('put')
            @csrf

            @if ($errors->any())
                <div class="alert alert-warning">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error}}</p>
                    @endforeach
                </div>
            @endif

            <center>

            <div class="input-group mb-3">
                <input type="text" class="form-control" name="identificador_jogo" id="identificador_jogo" value="{{$jogo ->identificador_jogo}}" placeholder="Número do Identificador Concurso" aria-label="Número do Concurso" aria-describedby="basic-addon2">
                <div class="dropdown">
                    <div aria-labelledby="dropdownMenuButton">
                        <select class="btn btn-success dropdown-toggle" name="concurso_id" id="inputConcurso_id">
                            <option value="">Concurso</option>
                                @foreach ($concursos as $concurso)
                                <option name="{{$concurso->id}}" value="{{$concurso->id}}">
                                    Concurso - {{$concurso->identificador_concurso}}
                                </option>
                                @endforeach
                        </select>
                    </div>
                </div>

            </div>

            @php
                $s = 0;
            @endphp
            @for ($i = 0 ; $i < 10; $i++)
                @for ($j = 0 ; $j < 5; $j++)
                    <input name="numerojogado[]" value="{{$jogo->numerojogado[$s]}}">
                    @php
                        $s = $s + 1;
                    @endphp
                @endfor
                <br>
            @endfor
            <br>
            <button type="submit" class="btn btn-success btn-lg" role="toolbar">Concluir</button>
            <div class="btn-group mr-2" role="group" aria-label="Second group">
                <div class="acoes">
                    <a class="btn btn-primary" href=" {{ route('jogo.index')}} ">Voltar</a>
                </div>
            </div>
            </center>
</form>
@endsection
