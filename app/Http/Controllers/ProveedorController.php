<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\proveedor;
use App\Models\tipos;
use App\Models\ciudad;


class proveedorController extends Controller
{
    public function index()
    {
    	$proveedor = proveedor::all();
    	return view('proveedor.proveedorListado', compact('proveedor'));
    }

    public function delete(proveedor $proveedor)
    {	
    	$proveedor->delete();
    	$proveedor=proveedor::all();
    	return redirect()->route('proveedor.index',compact('proveedor'));
    }

    public function edit($id)
    {
    	$proveedor = proveedor::find($id);
        $tipos = tipos::all();
        $ciudad = ciudad::all();
        return view('proveedor.proveedorEdit', compact('proveedor','tipos','ciudad'));
    }

    public function update(request $editInfo, proveedor $proveedor)
    {
    	//$proveedor->idProveedor = $editInfo->idProveedor;
        $proveedor->idTipos = $editInfo->idTipos;
		$proveedor->codigoCiudad = $editInfo->codigoCiudad;
		$proveedor->numeroIdentidad = $editInfo->numeroIdentidad;
    	$proveedor->nombre = $editInfo->nombre;
		$proveedor->direccion = $editInfo->direccion;
    	$proveedor->telefono = $editInfo->telefono;
    	$proveedor->email = $editInfo->email;

    	$proveedor->save();
    	$proveedor=proveedor::all();
        
    	return redirect()->route('proveedor.index',compact('proveedor'));
    }

    public function new()
    {
    	$proveedor = proveedor::all();
        $tipos = tipos::all();
        $ciudad = ciudad::all();
        return view('proveedor.proveedorNew',compact('proveedor','tipos','ciudad'));
    }

    public function save(request $create)
    {
    	$proveedor = new proveedor();

		$proveedor->idTipos = $create->idTipos;
		$proveedor->codigoCiudad = $create->codigoCiudad;
		$proveedor->numeroIdentidad = $create->numeroIdentidad;
    	$proveedor->nombre = $create->nombre;
		$proveedor->direccion = $create->direccion;
    	$proveedor->telefono = $create->telefono;
    	$proveedor->email = $create->email;

    	$proveedor->save();
    	$proveedor=proveedor::all();

    	return redirect()->route('proveedor.index',compact('proveedor'));
    }
}
