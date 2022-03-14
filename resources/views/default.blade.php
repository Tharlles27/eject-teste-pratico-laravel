@extends('base')
@section('content')
    @section('title')
    <h1 class="mt-4">Meus dados</h1>
    @stop

  @foreach($pedidos as $pedido)
  {{$pedido}}<hr>
  @endforeach
@stop
