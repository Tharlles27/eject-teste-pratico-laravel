<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $lista_veiculos = Veiculo::all();
        return view('listaVeiculo', compact('lista_veiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('veiculoRegistro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $veiculo = new Veiculo;
        $veiculo->marca_modelo = $request->marca_modelo;
        $veiculo->ano = $request->ano;
        $veiculo->km = $request->km;
        $veiculo->cambio = $request->cambio;
        $veiculo->qtd_portas = $request->qtd_portas;
        $veiculo->combustivel = $request->combustivel;
        $veiculo->valor = $request->valor;
        $veiculo->obs = $request->obs;

        //upload da imagem
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")).".".$extension;
            $requestImage->move(public_path('img/veiculos'), $imageName);

            //Salvando a imagem de fato
            $veiculo->image = $imageName;
        }

        //Salvando o usuario no modelo de foreignId
        $user = auth()->user();
        $veiculo->user_id = $user->id;

        $veiculo->save();

    
        return redirect('/veiculo/shop'); 
    }

    public function show($id)
    {
        $veiculoItem = Veiculo::findOrFail($id);
        return view('veiculoShow', ['veiculoItem' => $veiculoItem]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
