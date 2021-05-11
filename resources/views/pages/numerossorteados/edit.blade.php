@extends('template.template')


@section('edit')
    <table class="table table-striped">
        <h1>Edição de Cartões</h1>
        <form action=" {{ route('sorteados.update', $sorteado ->id)}}  " method="POST">
            @method('put')
            @csrf

            @if ($errors->any())
            <div class="alert alert-warning">
                @foreach ($errors->all() as $error)
                    <p>{{ $error}}</p>
                @endforeach
            </div>
            @endif

            <div class="input-group mb-3">
                <input type="text" class="form-control" name="identificador" id="identificador" value="{{$sorteado->identificador}}" placeholder="Número do Identificador Concurso" aria-label="Número do Concurso" aria-describedby="basic-addon2">
            </div>

            <tbody>
                <tr>
                    <td><input type="number" name="ns1" id="ns1" value="{{$sorteado->ns1}}" ></td>
                    <td><input type="number" name="ns2" id="ns2" value="{{$sorteado->ns2}}"></td>
                    <td><input type="number" name="ns3" id="ns3" value="{{$sorteado->ns3}}"></td>
                    <td><input type="number" name="ns4" id="ns4" value="{{$sorteado->ns4}}"></td>
                    <td><input type="number" name="ns5" id="ns5" value="{{$sorteado->ns5}}"></td>
                </tr>
                <tr>
                    <td><input type="number" name="ns6" id="ns6" value="{{$sorteado->ns6}}"></td>
                    <td><input type="number" name="ns7" id="ns7" value="{{$sorteado->ns7}}"></td>
                    <td><input type="number" name="ns8" id="ns8" value="{{$sorteado->ns8}}"></td>
                    <td><input type="number" name="ns9" id="ns9" value="{{$sorteado->ns9}}"></td>
                    <td><input type="number" name="ns10" id="ns10" value="{{$sorteado->ns10}}"></td>
                </tr>
                <tr>
                    <td><input type="number" name="ns11" id="ns11" value="{{$sorteado->ns11}}"></td>
                    <td><input type="number" name="ns12" id="ns12" value="{{$sorteado->ns12}}"></td>
                    <td><input type="number" name="ns13" id="ns13" value="{{$sorteado->ns13}}"></td>
                    <td><input type="number" name="ns14" id="ns14" value="{{$sorteado->ns14}}"></td>
                    <td><input type="number" name="ns15" id="ns15" value="{{$sorteado->ns15}}"></td>
                </tr>
                <tr>
                    <td><input type="number" name="ns16" id="ns16" value="{{$sorteado->ns16}}"></td>
                    <td><input type="number" name="ns17" id="ns17" value="{{$sorteado->ns17}}"></td>
                    <td><input type="number" name="ns18" id="ns18" value="{{$sorteado->ns18}}"></td>
                    <td><input type="number" name="ns19" id="ns19" value="{{$sorteado->ns19}}"></td>
                    <td><input type="number" name="ns20" id="ns20" value="{{$sorteado->ns20}}"></td>
                </tr>
            </tbody>
        </table>
        <button type="submit" class="btn btn-secondary btn-lg" role="toolbar">Editar</button>
        <div class="btn-group mr-2" role="group" aria-label="Second group">
            <button type="submit" class="btn btn-secondary btn-lg" role="toolbar">
                <a href=" {{ route('sorteados.index')}} "> Voltar </a>
            </button>
        </div>
</form>
@endsection
