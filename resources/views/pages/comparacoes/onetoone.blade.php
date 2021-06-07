@extends('template.template')

@section('content')

        <h3><br>One To Many<h3>
            @foreach($jogos as $jogo)
                <h5><hr>Identificador do concurso: {{$jogo->concurso_id}}</h5>

                <h5><br>identificador do jogo: {{$jogo->identificador_jogo}}</h5>

                <br>Nº jogados:
                @for ($i=0; $i < 20; $i++)
                    {{$jogo->numerojogado[$i]}}
                @endfor
                <br>
                <br>Nº Sorteados:
                @for ($i=0; $i < 20; $i++)
                    {{$concurso->numerosorteado[$i]}}
                @endfor
                <br>
                <br>
                Numeros Certos:
                @for ($i=0; $i < 20; $i++)
                    @for ($j=0; $j < 20; $j++)
                        @if ($jogo->numerojogado[$i] == $concurso->numerosorteado[$j])
                            {{$jogo->numerojogado[$i]}}
                        @endif
                    @endfor
                @endfor
                <br>
                Numeros errados:

                @for ($i=0; $i < 20; $i++)
                    @php
                        $soma = 0;
                    @endphp
                    @for ($j=0; $j < 20; $j++)

                        @if ($jogo->numerojogado[$i] != $concurso->numerosorteado[$j])
                            @php
                                $soma = $soma+1;
                            @endphp
                        @endif
                    @endfor

                    @if ($soma == 20)
                        {{$jogo->numerojogado[$i]}}
                    @endif
                @endfor
            @endforeach

@endsection

