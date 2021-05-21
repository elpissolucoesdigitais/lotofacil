@extends('template.template')

@section('create')

    <link rel="stylesheet" href="">
    <br>

    <div class="d-flex justify-content-center">
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="acoes">
                <a class="btn btn-primary" href=" {{ route('cartoes.home')}} ">Voltar</a>
            </div>
        </div>
    </div>

    <hr>

        <tbody>
            @foreach ( $jogos as $jogo)

                    <h4>ID Numero Jogado - {{ $jogo->id}}<br>
                    Identificador do concurso - {{ $jogo->concurso_id}}<br>
                    Identificador do cartao - {{ $jogo->identificador_jogo}}<br>

                    Numero Jogados -

                            @php
                                $s = 0;
                            @endphp
                            @for ($i = 0 ; $i < 5; $i++)
                                @for ($j = 0 ; $j < 4; $j++)
                                    {{$jogo->numerojogado[$s]}}
                                    @php
                                        $s = $s + 1;
                                    @endphp
                                @endfor
                            @endfor
                    </h4>
            @endforeach
        </tbody>

    <hr>

@endsection
