<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste($p1,$p2)
    {
        //echo"A soma de $p1 + $p2 é igual a ".($p1+$p2);
        // return view('site.teste', ['x' => $p1, 'y' => $p2]); //array associativo

        return view('site.teste', compact('p1','p2'));
    }
}
