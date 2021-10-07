<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Fornecedor;

class FornecedorController extends Controllers
{
  //
  public function show(){
      $fornecedor = Fornecedor::all();
      echo $fornecedor;
  }
}