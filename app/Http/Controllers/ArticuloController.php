<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\articulo;

class ArticuloController extends Controller
{
    public function index()// listar
    {
        $articulo = articulo::all();
        return view('articulo.articuloListado',compact('articulo'));
    }
    public function delete()
    {

    }

    public function edit()
    {

    }
}
