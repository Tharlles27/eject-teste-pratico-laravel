@extends('base')
@section('content')
@section('title')
<h1 class="mt-4">Veículo</h1>
@stop

<main>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                </h4>
                <!--<ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal">
                                Cadastrar categoria
                            </button>
                        </div>
                        <!--<span class="text-muted">$12</span>-->
                <!-- </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <label for="firstName" class="form-label">Kilometros rodados</label>
                            <input type="text" class="form-control" id="km" name="km" placeholder="" value="" required>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <label for="firstName" class="form-label">Tipo de câmbio</label>
                            <input type="text" class="form-control" id="cambio" name="cambio" placeholder="" value=""
                                required>
                        </div>
                    </li>
                </ul> -->
            </div>
            <div class="col-md-7 col-lg-12">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">Marca/Modelo</label>
                        <input type="text" class="form-control" id="marca_modelo" name="marca_modelo" placeholder=""
                            value="" required>
                        <div class="invalid-feedback">
                            Este campo é obrigatório
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Tipo de combustivel</label>
                        <input type="text" class="form-control" id="combustivel" name="combustivel" placeholder=""
                            value="" required>
                    </div>
                    <div class="col-sm-3">
                        <label for="firstName" class="form-label">Qtd. portas</label>
                        <input type="text" class="form-control" id="qtd_portas" name="qtd_portas" placeholder=""
                            value="" required>
                    </div>
                    <div class="col-sm-3">
                        <label for="firstName" class="form-label">Valor do veículo</label>
                        <input type="text" class="form-control" id="valor" name="valor" placeholder="" value=""
                            required>
                    </div>
                    <div class="col-sm-3">
                        <label for="firstName" class="form-label">Ano de fabricação</label>
                        <input type="text" class="form-control" id="ano" name="ano" placeholder="" value="" required>
                    </div>
                    <div class="col-sm-3">
                        <label for="firstName" class="form-label">Kilometros rodados</label>
                        <input type="text" class="form-control" id="km" name="km" placeholder="" value="" required>
                    </div>
                    <div class="col-sm-3">
                        <label for="firstName" class="form-label">Tipo de câmbio</label>
                        <input type="text" class="form-control" id="cambio" name="cambio" placeholder="" value=""
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Observações sobre o veículo. <strong>Maximo de 150
                                caracteres</strong></label>
                        <textarea class="form-control" id="obs" name="obs" rows="3" maxlength="150"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Envie uma imagem para apresentar o seu veículo</label>
                        <input type="file" name="image" class="from-control-file" />
                    </div>
                </div>

                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit">Registrar</button>
    </form>
    </div>
    </div>
</main>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nova Categoria</h5>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    @csrf
                    <div class="col-sm-12">
                        <label for="firstName" class="form-label">Voçe tambem pode cadastrar conjunto de palavras numa
                            mesma categoria, separando-as por uma <strong>VIRGULA ( , )</strong> </label>
                        <input type="text" class="form-control" id="categoria" name="categoria" placeholder="" value=""
                            required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>

@stop