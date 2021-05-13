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
                        <th scope="col">Identificador</th>
                        <th scope="col">Data de Cadastro</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $cartao->id}}</th>
                        <td>{{ $cartao->identificador}}</td>
                        <td>{{ $cartao->created_at}}</td>

                    </tr>
            </tbody>
        </table>

        <form action=" {{ route('cartoes.update', $cartao->id)}}  " method="POST">
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
                <input type="text" class="form-control" name="identificador" id="identificador" value="{{$cartao ->identificador}}" placeholder="Número do Identificador Concurso" aria-label="Número do Concurso" aria-describedby="basic-addon2">
            </div>

            @php
                $s = 0;
            @endphp
            @for ($i = 0 ; $i < 5; $i++)
                @for ($j = 0 ; $j < 4; $j++)
                    <input type="number" name="numerojogado[]" value="{{$cartao->numerojogado[$s]}}" placeholder="{{$s}}">
                    @php
                        $s = $s + 1;
                    @endphp
                @endfor
                <br>
            @endfor
            <br>
            <button type="submit" class="btn btn-secondary btn-lg" role="toolbar">Concluir</button>
            <div class="btn-group mr-2" role="group" aria-label="Second group">
                <button type="submit" class="btn btn-secondary btn-lg" role="toolbar">
                    <a href=" {{ route('cartoes.index')}} "> Voltar </a>
                </button>
            </div>
            </center>
</form>
@endsection
