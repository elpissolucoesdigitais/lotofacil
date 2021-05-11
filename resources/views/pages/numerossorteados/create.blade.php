@extends('template.template')

@section('create')
    <br>
    <h1 style="text-align:center;">Cadastrar Cartões Sorteados</h1>

    <div class="">

        <form action=" {{ route('sorteados.store')}} " method="POST">
        @csrf

        @if ($errors->any())
            <div class="alert alert-warning">
                @foreach ($errors->all() as $error)
                    <p>{{ $error}}</p>
                @endforeach
            </div>
        @endif

        <div class="input-group mb-3">
            <input type="text" class="form-control" name="identificador" placeholder="Número do Identificador Concurso" aria-label="Número do Concurso" aria-describedby="basic-addon2">
        </div>


            <table class="">
                <thead>
                    <h2 style="text-align:center;">Insira os Números Sorteados Abaixo</h2>
                </thead>
                <tr>
                    <td><input type="number" name="ns1" id="ns1" placeholder="01"></td>
                    <td><input type="number" name="ns2" id="ns2" placeholder="02"></td>
                    <td><input type="number" name="ns3" id="ns3" placeholder="03"></td>
                    <td><input type="number" name="ns4" id="ns4" placeholder="04"></td>
                    <td><input type="number" name="ns5" id="ns5" placeholder="05"></td>
                </tr>
                <tr>
                    <td><input type="number" name="ns6" id="ns6" placeholder="06"></td>
                    <td><input type="number" name="ns7" id="ns7" placeholder="07"></td>
                    <td><input type="number" name="ns8" id="ns8" placeholder="08"></td>
                    <td><input type="number" name="ns9" id="ns9" placeholder="09"></td>
                    <td><input type="number" name="ns10" id="ns10" placeholder="10"></td>
                </tr>
                <tr>
                    <td><input type="number" name="ns11" id="ns11" placeholder="11"></td>
                    <td><input type="number" name="ns12" id="ns12" placeholder="12"></td>
                    <td><input type="number" name="ns13" id="ns13" placeholder="13"></td>
                    <td><input type="number" name="ns14" id="ns14" placeholder="14"></td>
                    <td><input type="number" name="ns15" id="ns15" placeholder="15"></td>
                </tr>
                <tr>
                    <td><input type="number" name="ns16" id="ns16" placeholder="16"></td>
                    <td><input type="number" name="ns17" id="ns17" placeholder="17"></td>
                    <td><input type="number" name="ns18" id="ns18" placeholder="18"></td>
                    <td><input type="number" name="ns19" id="ns19" placeholder="19"></td>
                    <td><input type="number" name="ns20" id="ns20" placeholder="20"></td>

                </tr>
            </table>

            <div class="d-flex justify-content-center">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button type="submit" class="btn btn-secondary btn-lg" role="toolbar">
                            Cadastrar Concurso
                        </button>
                    </div>
                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                        <button type="submit" class="btn btn-secondary btn-lg" role="toolbar">
                            <a href=" {{ route('cartoes.home')}} "> Voltar </a>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection





