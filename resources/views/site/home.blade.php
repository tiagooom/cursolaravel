@extends('site.layout')
@section('title', 'Essa é a nossa página HOME')
@section('conteudo')
    
<div class="row container">
  @foreach ($produtos as $produto)
    <div class="col s12 m3">
      <div class="card">
        <div class="card-image">
          <img src="{{ $produto->imagem }}" class="imagem-card">
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
        </div>
        <div class="card-content">
          <span class="card-title">{{ Str::limit($produto->nome,20) }}</span>
          <p>{{ $produto->descricao }}</p>
        </div>
      </div>
    </div>
  @endforeach
</div>



@endsection