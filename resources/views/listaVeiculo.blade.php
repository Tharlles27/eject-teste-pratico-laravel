@extends('base')
@section('content')
@section('title')
<h1 class="mt-4">Store</h1>
@stop

<main>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($lista_veiculos as $veiculo)
                <!--  https://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/cindra/imagens/sem.jpg.gif/image   -->
                <!-- Inicio do card-->
                <div class="col">
                    <div class="card shadow-sm">
                        @if($veiculo->image)
                            <img src="/img/veiculos/{{ $veiculo->image }}" alt="{{ $veiculo->marca_modelo }}" />
                        @else
                            <img src="https://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/cindra/imagens/sem.jpg.gif/image" alt="{{ $veiculo->marca_modelo }}" />
                        @endif
                        <div class="card-body">
                            <p class="card-text">{{$veiculo->obs}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="/veiculo/show/{{ $veiculo->id }}" type="button" class="btn btn-sm btn-outline-secondary">Ver</a>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Solicitar</button>
                                </div>
                                <small class="text-muted">R$ {{ $veiculo->valor }}</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim do card-->
                @endforeach
            </div>
</main>

@stop