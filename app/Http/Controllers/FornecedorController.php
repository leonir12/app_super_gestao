<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {

        $fornecedores = [
            0 => ['nome' => 'Leonir', 'status' => 'N', 'CPF' => '0', 'ddd' => '67', 'telefone' => '99999-9990'],
            1 => ['nome' => 'Jota', 'status' => 'S', 'CPF' => null, 'ddd' => '85', 'telefone' => '99999-9991'],
            2 => ['nome' => 'Guilherme', 'status' => 'S', 'CPF' => null, 'ddd' => '11', 'telefone' => '99999-9992']
        ];

   

        return view('app.fornecedor.index', compact('fornecedores'));
        
    }
}
