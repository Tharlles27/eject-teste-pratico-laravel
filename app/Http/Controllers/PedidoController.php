<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Veiculo;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $pedidos = $user->pedidos;
        //para find de testes
        $variavel_teste = false;
        return view('pedidosLista', ['pedidos' => $pedidos, "variavel_teste" => $variavel_teste]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $item = Veiculo::findOrFail($id);
        return view('pedidoRegistro', ['item' => $item]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $pedido = new Pedido;
        $pedido->valor_entrada = $request->valor_entrada;
        $pedido->parcelas = $request->parcelas;
        $pedido->profissão = $request->profissao;
        $pedido->remuneracao = $request->remuneracao;
        $pedido->estado_civil = $request->estado_civil;
        $pedido->cpf = $request->cpf;
        $pedido->endereco = $request->endereco; 

        $cod = rand(1234, 56789);
        $pedido->codigo_pedido = $cod;

        //Salvando o usuario no modelo de foreignId
        $user = auth()->user();
        $pedido->user_id = $user->id;

        $item = Veiculo::findOrFail($id);
        $pedido->veiculo_id = $item->id;

        $pedido->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('pedidoShow', ['pedido'=>$pedido]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
