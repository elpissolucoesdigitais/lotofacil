@extends('template.template')

@section('index')

@if (session('message'))
    <h3>
        {{session('message')}}
    </h3>

@endif

    

@endsection

