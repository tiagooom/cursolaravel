@extends('site.layout')
@section('title', 'Carrinho')
@section('conteudo')


<div class="row container">
    <h5>Carrinho possui {{ count($itens) }} produtos.</h5>
    
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($itens as $item)
             
            <tr>
                <td><img src ="{{ $item->attributes->image }}" alt="" width="70" class="reponsive-img circle"></td>
                <td>{{ $item->name }}</td>
                <td> R$ {{ number_format($item->price, 2, ',', '.') }}</td>
                <td><input style="width: 40px; font-weight:900;" class="white center" type="number" name="quantity" value="{{ $item->quantity }}"></td>
                <td>  
                    <button class="btn-floating  waves-effect waves-light orange"><i class="material-icons">refresh</i></button>
                    <button class="btn-floating  waves-effect waves-light red"><i class="material-icons">delete</i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <div class="row container center">
        <button class="btn waves-effect waves-light blue"> Continuar Comprando <i class="material-icons right">arrow_back</i></button>
        <button class="btn waves-effect waves-light blue"> Limpar Carrinho <i class="material-icons right">clear</i></button>
        <button class="btn waves-effect waves-light green"> Finalizar pedido <i class="material-icons right">check</i></button>
      </div>
    
  </div>
  
@endsection