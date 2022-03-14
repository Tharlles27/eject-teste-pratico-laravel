@extends('base')
@section('content')
@section('title')
<h1 class="mt-4">Pedido Nº {{$pedido->codigo_pedido}}</h1>
@stop

<main>
    <div class="alert alert-warning" role="alert">
        Pedido em análise
    </div>
    <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary">{{$pedido->veiculo->marca_modelo}}</span>
            </h4>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="/img/veiculos/{{$pedido->veiculo->image}}"
                    alt="{{$pedido->veiculo->valor}}">
                <div class="card-body">
                    <p class="card-text">R$ 455</p>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-lg-8">
            <form class="needs-validation" method="post">@csrf
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Profissão</label>
                        <input type="text" class="form-control" id="profissao" name="profissao" placeholder=""
                            value="{{$pedido->profissão}}" disabled>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Remuneração</label>
                        <input type="text" class="form-control" id="remuneracao" name="remuneracao" placeholder=""
                            value="R$ {{$pedido->remuneracao}} " disabled>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>

                    <div class="col-3">
                        <label for="lastName" class="form-label">Estado Civil</label>
                        <input type="text" class="form-control" id="estado_civil" name="estado_civil" placeholder=""
                            value="{{$pedido->estado_civil}}" disabled>
                    </div>
                    <div class="col-sm-3">
                        <label for="firstName" class="form-label">CPF/RG</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder=""
                            value="{{$pedido->remuneracao}} " disabled>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>

                    </div>
                    <div class="col-sm-3">
                        <label for="lastName" class="form-label">Valor de entrada</label>
                        <input type="text" class="form-control" id="valor_entrada" name="valor_entrada" placeholder=""
                            value="{{$pedido->valor_entrada}}" disabled>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <label for="lastName" class="form-label">Numero de parcelas</label>
                        <input type="text" class="form-control" id="valor_entrada" name="valor_entrada" placeholder=""
                            value="{{$pedido->parcelas}}" disabled>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <label for="lastName" class="form-label">Endereço completo</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder=""
                            value="{{$pedido->endereco }}" disabled>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                    <hr class="my-4">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Editar</button>

            </form>
        </div>
    </div>
</main>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Desculpe!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Esse pedido de financiamento encontra-se em análise, impossibilitando assim sua edição
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok, entendi</button>
            </div>
        </div>
    </div>
</div>

@stop