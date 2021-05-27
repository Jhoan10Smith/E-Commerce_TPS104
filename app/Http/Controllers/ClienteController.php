<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\cliente;

class ClienteController extends Controller
{
    public function index()
    {
    	$cliente = cliente::all();
    	return view('cliente.clienteListado', compact('cliente'));
    }
}
