<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\factura;

class FacturaController extends Controller
{
    public function index()
    {
    	$factura=factura::all();
    	return view('factura.facturaListado',compact('factura'));
    }

    public function edit(factura $factura)
    {
    	return view('factura.facturaEdit',compact('factura'));
    }

    public function update(request $update, factura $factura)
    {
    	// return $update;
    	$factura->numeroDocumento = $update->numeroDocumento;
    	$factura->fecha = $update->fecha;
    	$factura->hora = $update->hora;
    	$factura->codigoCliente = $update->codigoCliente;
    	$factura->idEmpleado = $update->idEmpleado;

    	$factura->save();
    	$factura=factura::all();
    	return redirect()->route('factura.index',compact('factura'));
    }

    public function delete(factura $factura)
    {
    	$factura->delete();
    	$factura=factura::all();

    	return redirect()->route('factura.index',compact('factura'));
    }

    public function new()
    {
    	return view('factura.facturaNew');
    }

    public function save(request $new)
    {
    	$factura=new factura();

    	$factura->numeroDocumento = $new->numeroDocumento;
    	$factura->fecha = $new->fecha;
    	$factura->hora = $new->hora;
    	$factura->codigoCliente = $new->codigoCliente;
    	$factura->idEmpleado = $new->idEmpleado;

    	$factura->save();
    	$factura=factura::all();

    	return redirect()->route('factura.index',compact('factura'));
    }

}
