@extends('template.template')

@section('show')
    <table class="table table-striped">
      <h1>Números Sorteados</h1>
        <tbody>
            <div class="table_form">
                @php
                    $s = 0;
                @endphp
                @for ($i = 0 ; $i < 5; $i++)
                    @for ($j = 0 ; $j < 4; $j++)

                        <input type="number" name="numerosorteado[]" value="{{$sorteado->numerosorteado[$s]}}" placeholder="{{$s}}">
                        @php
                            $s = $s + 1;
                        @endphp
                    @endfor
                    <br>
                @endfor
            </div>
    </table>
    <button type="button" class="btn btn-success btn-lg" role="toolbar">
        <a href="{{ route('sorteados.index')}}">Voltar</a>
    </button>
    <button type="button" class="btn btn-primary btn-lg">
        <a href="{{ route('sorteados.edit', $sorteado->id)}}">Editar</a>
    </button>
    <form action="{{ route('sorteados.destroy', $sorteado->id)}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-danger">Apagar</button>
    </form>
@endsection


















