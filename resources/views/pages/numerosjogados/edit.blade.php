@extends('template.template')


@section('edit')
    <table class="table table-striped">
        <h1>Edição de Cartões</h1>
        <form action=" {{ route('cartoes.update', $cartao ->id)}}  " method="POST">
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
                <input type="text" class="form-control" name="identificador" id="identificador" value="{{$cartao ->identificador}}" placeholder="Número do Identificador Concurso" aria-label="Número do Concurso" aria-describedby="basic-addon2">
            </div>

            <tbody>
                <tr>
                    <td><input type="number" name="nj1" id="nj1" value="{{$cartao ->nj1}}" ></td>
                    <td><input type="number" name="nj2" id="nj2" value="{{$cartao ->nj2}}"></td>
                    <td><input type="number" name="nj3" id="nj3" value="{{$cartao ->nj3}}"></td>
                    <td><input type="number" name="nj4" id="nj4" value="{{$cartao ->nj4}}"></td>
                    <td><input type="number" name="nj5" id="nj5" value="{{$cartao ->nj5}}"></td>
                </tr>
                <tr>
                    <td><input type="number" name="nj6" id="nj6" value="{{$cartao ->nj6}}"></td>
                    <td><input type="number" name="nj7" id="nj7" value="{{$cartao ->nj7}}"></td>
                    <td><input type="number" name="nj8" id="nj8" value="{{$cartao ->nj8}}"></td>
                    <td><input type="number" name="nj9" id="nj9" value="{{$cartao ->nj9}}"></td>
                    <td><input type="number" name="nj10" id="nj10" value="{{$cartao ->nj10}}"></td>
                </tr>
                <tr>
                    <td><input type="number" name="nj11" id="nj11" value="{{$cartao ->nj11}}"></td>
                    <td><input type="number" name="nj12" id="nj12" value="{{$cartao ->nj12}}"></td>
                    <td><input type="number" name="nj13" id="nj13" value="{{$cartao ->nj13}}"></td>
                    <td><input type="number" name="nj14" id="nj14" value="{{$cartao ->nj14}}"></td>
                    <td><input type="number" name="nj15" id="nj15" value="{{$cartao ->nj15}}"></td>
                </tr>
                <tr>
                    <td><input type="number" name="nj16" id="nj16" value="{{$cartao ->nj16}}"></td>
                    <td><input type="number" name="nj17" id="nj17" value="{{$cartao ->nj17}}"></td>
                    <td><input type="number" name="nj18" id="nj18" value="{{$cartao ->nj18}}"></td>
                    <td><input type="number" name="nj19" id="nj19" value="{{$cartao ->nj19}}"></td>
                    <td><input type="number" name="nj20" id="nj20" value="{{$cartao ->nj20}}"></td>
                </tr>
            </tbody>
        </table>
        <button type="submit" class="btn btn-secondary btn-lg" role="toolbar">Editar</button>
</form>
@endsection
