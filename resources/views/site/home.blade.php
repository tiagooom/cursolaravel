@extends('site.layout');
@section('title', 'Essa é a noss pagina HOME')
@section('conteudo')
    <h1> Essa é nossa home </h1>
    @for ($i = 0; $i < 15; $i++)
        valor atual é {{ $i }} <br>
    @endfor
@endsection