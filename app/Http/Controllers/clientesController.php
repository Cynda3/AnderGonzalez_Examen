<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class clientesController extends Controller
{
    public function mostrar(){
        return view('cliente/index', ['clientes' => Cliente::all()]);
    }
}
