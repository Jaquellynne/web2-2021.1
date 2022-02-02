<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Fornecedor;
use App\Models\Produto;
use App\Models\Venda;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {   
        $carros = Produto::get();
        $clientes = Cliente::get();
        $fornecedores = Fornecedor::get();
        $vendas = Venda::get();
        
        return view('pages.dashboard',compact('carros','clientes','fornecedores','vendas'));
    }
}
