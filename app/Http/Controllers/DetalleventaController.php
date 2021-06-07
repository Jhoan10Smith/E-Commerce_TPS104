<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\detalleventa;

class DetalleventaController extends Controller
{
    public function index()
    {
    	$venta = detalleventa::all();
    	return view('detalleventa.ventaListado',compact('venta'));
    }

    public function delete(detalleventa $venta)
    {
    	$venta->delete();
    	$venta=detalleventa::all();
    	return redirect()->route('venta.index',compact('venta'));
    }

    public function edit(detalleventa $venta)
    {
    	return view('detalleventa.ventaEdit',compact('venta'));
    }

    public function update(request $modify, detalleventa $venta)
    {
    	$venta->cantidad = $modify->cantidad;
    	$venta->iva = $modify->iva;
    	$venta->sinIva = $modify->sinIva;
    	$venta->porDescuento = $modify->porDescuento;
    	$venta->totalDescuento = $modify->totalDescuento;
    	$venta->total = $modify->total;

    	$venta->save();
    	$venta=detalleventa::all();

    	return redirect()->route('venta.index',compact('venta'));
    }

    public function new()
    {
    	return view('detalleventa.ventaNew');
    }

    public function create(request $newSale)
    {
    	$venta=new detalleventa();

    	$venta->cantidad = $newSale->cantidad;
    	$venta->iva = $newSale->iva;
    	$venta->sinIva = $newSale->sinIva;
    	$venta->porDescuento = $newSale->porDescuento;
		$venta->totalDescuento = $newSale->totalDescuento;
		$venta->total = $newSale->total;

		$venta->save();
		$venta=detalleventa::all();

    	return redirect()->route('venta.index',compact('venta'));
    }


}
