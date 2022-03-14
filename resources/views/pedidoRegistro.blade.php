@extends('base')
@section('content')
@section('title')
<h1 class="mt-4">Pedido de financiamento</h1>
@stop

<main>
    <div class="alert alert-warning" role="alert">
        Para fazer seu pedido de financiamento, preencha com atenção todos os campos e faremos uma análise do seu
        pedido!
    </div>
    <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary">Veículo</span>
            </h4>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">observações</p>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-lg-8">
            <form class="needs-validation" method="post">@csrf
                <div class="row g-3">
                    <div class="col-sm-6">
                    <label for="lastName" class="form-label">Profissão</label>
                        <input type="text" class="form-control" id="profissao" name="profissao" placeholder="" value="">
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Remuneração</label>
                        <input type="text" class="form-control" id="remuneracao" name="remuneracao" placeholder=""
                            value="">
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>

                    <div class="col-3">
                        <label for="lastName" class="form-label">Estado Civil</label>
                        <input type="text" class="form-control" id="estado_civil" name="estado_civil" placeholder=""
                            value="">
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                    <div class="col-sm-3">
                    <label for="firstName" class="form-label">CPF/RG</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="" value=" " required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                        
                    </div>
                    <div class="col-sm-3">
                        <label for="lastName" class="form-label">Valor de entrada</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="">
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                    <div class="col-sm-3">
                    <label for="lastName" class="form-label">Numero de parcelas</label>
                            <select class="form-control" id="parcelas" name="parcelas">
                                <option>24</option>
                                <option>48</option>
                                <option>72</option>
                            </select>
                    </div>
                    <div class="col-sm-12">
                    <label for="lastName" class="form-label">Endereço completo</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="" value="">
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                    <hr class="my-4">
                    <button type="submit" class="btn btn-success">Enviar solicitação</button>
            </form>
        </div>
    </div>
</main>

@stop