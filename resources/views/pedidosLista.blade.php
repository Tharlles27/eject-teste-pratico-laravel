@extends('base')
@section('content')
@section('title')
<h1 class="mt-4">Meus pedidos</h1>
@stop
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Cod. Pedido</th>
            <th scope="col">Valor da entrada</th>
            <th scope="col">Qtd. de parcelas</th>
            <th scope="col">Status do pedido</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pedidos as $pedido)
        <tr>
            <th scope="row">{{ $pedido->codigo_pedido }}</th>
            <td>R$ {{$pedido->valor_entrada}}</td>
            <td>{{$pedido->parcelas}} parcelas</td>
            <td>
                @if($pedido->status == 0)
                <button class="btn btn-primary" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Em análise...
                </button>
                @elseif($pedido->status == 1)
                <button class="btn btn-danger" type="button" >
                    Pedido negado
                </button>
                @else
                <a href="/pedido/show/{{$pedido->id}}" class="btn btn-success" type="button">
                    Aprovado
                </a>
                @endif

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop