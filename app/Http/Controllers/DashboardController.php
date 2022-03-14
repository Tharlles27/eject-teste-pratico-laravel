<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pedido;

class DashboardController extends Controller
{
    public function index(){
        $user = auth()->user();
        $pedidos = $user->pedidos;
        if(Auth::user() AND Auth::user()->admin == 1) {
            return view('dashboard');
        } else {
            return view('default', ['pedidos' => $pedidos]);
    }
}
}
