<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $pedidos = Pedido::all();
        return view('pedidos.index',["pedidos"=>$pedidos]);
    }
}
