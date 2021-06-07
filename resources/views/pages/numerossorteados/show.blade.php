@extends('template.template')

@section('show')
    <br>
    <div class="d-flex justify-content-center">
        <div class="btn-group mr-2" role="group" aria-label="Second group">
            <div class="acoes">
                <a class="btn btn-primary" href=" {{ route('concurso.index')}} ">Voltar</a>
            </div>
        </div>
    </div>

    <table class="table table-striped">
        <br>

        <h1 style="text-align: center;"> Números Do Concurso</h1>
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
                <th scope="row">{{ $concurso->id}}</th>
                <td>{{ $concurso->identificador_concurso}}</td>
                <td>{{ $concurso->created_at}}</td>
                <td>
                    <div class="Ações">
                        <form action="{{ route('concurso.destroy', $concurso->id)}}" method="post">
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


        @php
            $s = 0;
        @endphp
        @for ($i = 0 ; $i < 4; $i++)
            @for ($j = 0 ; $j < 5; $j++)
                <input value="{{$concurso->numerosorteado[$s]}}">
                @php
                    $s = $s + 1;
                @endphp
            @endfor
            <br>
        @endfor

    <hr>
        <h2>Pontuação: 20 pontos</h2><br>

        <section class="container">

            @foreach($jogos as $jogo)

                @php
                    $soma = 0;
                    for($i=0; $i < 50; $i++){
                        for ($j=0; $j < 20; $j++){
                            if($jogo->numerojogado[$i] == $concurso->numerosorteado[$j]){
                                $soma++;
                            }
                        }
                    }
                @endphp

                @if($soma == 20)
                    @include('pages.numerossorteados._partials.dados')
                @endif
            @endforeach

        </section>

        <h2>Pontuação: 19 pontos</h2><br>

        <section class="container">

            @foreach($jogos as $jogo)

                @php
                    $soma = 0;
                    for($i=0; $i < 50; $i++){
                        for ($j=0; $j < 20; $j++){
                            if($jogo->numerojogado[$i] == $concurso->numerosorteado[$j]){
                                $soma++;
                            }
                        }
                    }
                @endphp

                @if($soma == 19)
                    @include('pages.numerossorteados._partials.dados')
                @endif
            @endforeach

        </section>

        <h2>Pontuação: 18 pontos</h2><br>

        <section class="container">

            @foreach($jogos as $jogo)

                @php
                    $soma = 0;
                    for($i=0; $i < 50; $i++){
                        for ($j=0; $j < 20; $j++){
                            if($jogo->numerojogado[$i] == $concurso->numerosorteado[$j]){
                                $soma++;
                            }
                        }
                    }
                @endphp

                @if($soma == 18)
                    @include('pages.numerossorteados._partials.dados')
                @endif
            @endforeach

        </section>

        <h2>Pontuação: 17 pontos</h2><br>

        <section class="container">

            @foreach($jogos as $jogo)

                @php
                    $soma = 0;
                    for($i=0; $i < 50; $i++){
                        for ($j=0; $j < 20; $j++){
                            if($jogo->numerojogado[$i] == $concurso->numerosorteado[$j]){
                                $soma++;
                            }
                        }
                    }
                @endphp

                @if($soma == 17)
                    @include('pages.numerossorteados._partials.dados')
                @endif
            @endforeach

        </section>

        <h2>Pontuação: 16 pontos</h2><br>

        <section class="container">

            @foreach($jogos as $jogo)

                @php
                    $soma = 0;
                    for($i=0; $i < 50; $i++){
                        for ($j=0; $j < 20; $j++){
                            if($jogo->numerojogado[$i] == $concurso->numerosorteado[$j]){
                                $soma++;
                            }
                        }
                    }
                @endphp

                @if($soma == 16)
                    @include('pages.numerossorteados._partials.dados')
                @endif
            @endforeach

        </section>

        <h2>Pontuação: 15 pontos</h2><br>

        <section class="container">

            @foreach($jogos as $jogo)

                @php
                    $soma = 0;
                    for($i=0; $i < 50; $i++){
                        for ($j=0; $j < 20; $j++){
                            if($jogo->numerojogado[$i] == $concurso->numerosorteado[$j]){
                                $soma++;
                            }
                        }
                    }
                @endphp

                @if($soma == 15)
                    @include('pages.numerossorteados._partials.dados')
                @endif
            @endforeach

        </section>

        <h2>Pontuação: 0 pontos</h2><br>

        <section class="container">

            @foreach($jogos as $jogo)

                @php
                    $soma = 0;
                    for($i=0; $i < 50; $i++){
                        for ($j=0; $j < 20; $j++){
                            if($jogo->numerojogado[$i] == $concurso->numerosorteado[$j]){
                                $soma++;
                            }
                        }
                    }
                @endphp

                @if($soma == 0)
                    @include('pages.numerossorteados._partials.dados')
                @endif
            @endforeach
        </section>



@endsection

