<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\factura;
use App\Models\usuario;


class facturaController extends Controller
{
    public function index()
    {
    	$factura=factura::all();
    	return view('factura.facturaListado',compact('factura'));
    }

    public function edit(factura $factura)
    {
    	
        $usuario=usuario::all();
        return view('factura.facturaEdit',compact('factura','usuario'));
    }

   

}
