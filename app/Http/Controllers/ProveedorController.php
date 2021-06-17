<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\proveedor;

class ProveedorController extends Controller
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

    public function edit(proveedor $proveedor)
    {
    	return view('proveedor.proveedorEdit', compact('proveedor'));
    }

    public function update(request $update, proveedor $proveedor)
    {
    	$proveedor->numeroIdentidad = $update->numeroIdentidad;
    	$proveedor->nombre = $update->nombre;
    	$proveedor->codigoCiudad = $update->codigoCiudad;
    	$proveedor->direccion = $update->direccion;
    	$proveedor->telefono = $update->telefono;
    	$proveedor->email = $update->email;

    	$proveedor->save();
    	$proveedor=proveedor::all();
    	return redirect()->route('proveedor.index',compact('proveedor'));
    }

    public function new()
    {
    	return view('proveedor.proveedorNew');
    }

    public function save(request $create)
    {
    	$proveedor = new proveedor();

    	$proveedor->numeroIdentidad = $create->numeroIdentidad;
    	$proveedor->nombre = $create->nombre;
    	$proveedor->codigoCiudad = $create->codigoCiudad;
    	$proveedor->direccion = $create->direccion;
    	$proveedor->telefono = $create->telefono;
    	$proveedor->email = $create->email;

    	$proveedor->save();
    	$proveedor=proveedor::all();

    	return redirect()->route('proveedor.index',compact('proveedor'));
    }
}
