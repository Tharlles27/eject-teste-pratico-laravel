@extends('base')
@section('content')
    @section('title')
    <h1 class="mt-4">Veículo</h1>
    @stop

  <main>
    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">{{ $veiculoItem->marca_modelo }}</span>
        </h4>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/img/veiculos/{{ $veiculoItem->image }}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">{{ $veiculoItem->obs }}</p>
            </div>
            </div>
      </div>
      <div class="col-md-7 col-lg-8">
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Kilometragem</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="{{ $veiculoItem->km }} km " disabled>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Ano de fabricação</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="{{ $veiculoItem->ano }}" disabled>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-3">
              <label for="lastName" class="form-label">Tipo de câmbio</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="{{ $veiculoItem->cambio }}" disabled>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-sm-3">
              <label for="lastName" class="form-label">Tipo de combustivel</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="{{ $veiculoItem->combustivel }}" disabled>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-sm-3">
              <label for="lastName" class="form-label">Numero de portas</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="{{ $veiculoItem->qtd_portas }}" disabled>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-sm-3">
              <label for="lastName" class="form-label">Valor do veiculo</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value=" R$ {{ $veiculoItem->valor }}" disabled>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          <hr class="my-4">
        </form>
      </div>
    </div>
  </main>
          
@stop