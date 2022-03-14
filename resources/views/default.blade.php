@extends('base')
@section('content')
    @section('title')
    <h1 class="mt-4">Meus dados</h1>
    @stop

  <main>
    <div class="row g-5">
      <div class="col-md-7 col-lg-12">
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nome</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="{{ Auth::user()->name}}" disabled/>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Email</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="{{ Auth::user()->email}}" disabled>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Editar meus dados</button>
        </form>
      </div>
    </div>
  </main>
          
@stop