<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\articulo;

class articuloController extends Controller
{
    public function index()
    {
    	$articulo = articulo::all();
    	return view('articulo.articuloListado', compact('articulo'));
    }

    public function delete(articulo $articulo)
    {
    	$articulo->delete();
    	$articulo=articulo::all();

    	return redirect()->route('articulo.index',compact('articulo'));
    }

    public function edit(articulo $articulo)
    {
    	return view('articulo.articuloEdit', compact('articulo'));
    }

    public function update(request $editInfo, articulo $articulo)
    {	
    	$articulo->codigoArticulo =$editInfo->codigoArticulo;
    	$articulo->descripcion =$editInfo->descripcion;
    	$articulo->idProveedor =$editInfo->idProveedor;
    	$articulo->iva =$editInfo->iva;
    	

		$articulo->save();
		$articulo=articulo::all();

		return redirect()->route('articulo.index',compact('articulo'));
    }

    public function new()
    {
    	return view('articulo.articuloNew');
    }

    public function create(request $create)
    {
    	$articulo=new articulo();

    	$articulo->codigoArticulo =$create->codigoArticulo;
    	$articulo->descripcion =$create->descripcion;
    	$articulo->idProveedor =$create->idProveedor;
    	$articulo->iva =$create->iva;
    	
		$articulo->save();
        $articulo=articulo::all();

		return redirect()->route('articulo.index',compact('articulo'));
    }

}
