@extends('template.template')


@section('edit')
    <table class="table table-striped">
        <br>
        <h1 style="text-align:center;">Edição do Cartão Sorteado</h1>
        <hr>
        <table class="table table-striped">
            <br>
            <h1 style="text-align:center;">Número Sorteado</h1>
              <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Concurso</th>
                        <th scope="col">Data de Cadastro</th>
                    </tr>
              </thead>
              <tbody>
                    <tr>
                        <th scope="row">{{ $concurso->id}}</th>
                        <td>{{ $concurso->identificador_concurso}}</td>
                        <td>{{ $concurso->created_at}}</td>

                    </tr>
              </tbody>
        </table>
        <form action=" {{ route('concurso.update', $concurso->id)}}  " method="POST">
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
                    <input type="text" class="form-control" name="identificador_concurso" id="identificador_concurso" value="{{$concurso->identificador_concurso}}" placeholder="Número do Identificador Concurso" aria-label="Número do Concurso" aria-describedby="basic-addon2">
                </div>

                @php
                    $s = 0;
                @endphp
                @for ($i = 0 ; $i < 4; $i++)
                    @for ($j = 0 ; $j < 5; $j++)

                        <input name="numerosorteado[]" value="{{$concurso->numerosorteado[$s]}}">
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
                        <a class="btn btn-primary" href=" {{ route('concurso.index')}} ">Voltar</a>
                    </div>
                </div>
            </center>
        </form>
    </table>
@endsection
