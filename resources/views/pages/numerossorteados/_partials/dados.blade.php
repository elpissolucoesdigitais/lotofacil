<div class="table_form">

    <p>identificador do jogo: {{$jogo->identificador_jogo}}</p>
    <hr>Numeros jogados(Certos e errados)<br>

    @php
        $quebralinha = 0;
    @endphp
    @for ($i=0; $i < 50; $i++)
        <!-- Quebra de Linha para 5 itens em cada linha-->
        @if ($i == $quebralinha)
            <br>
            @php
                $quebralinha = $quebralinha + 5;
            @endphp
        @endif
        @php
            $soma = 0;
        @endphp
            @for ($j=0; $j < 20; $j++)
                @if ($jogo->numerojogado[$i] == $concurso->numerosorteado[$j])
                    <input class="green" value="{{$jogo->numerojogado[$i]}}">

                @endif
                @if ($jogo->numerojogado[$i] != $concurso->numerosorteado[$j])
                    @php
                        $soma = $soma + 1;
                    @endphp
                @endif
            @endfor
            @if ($soma == 20)
                <input value="{{$jogo->numerojogado[$i]}}">
            @endif

    @endfor

    <br>
</div>
