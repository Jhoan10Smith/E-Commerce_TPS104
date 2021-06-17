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

    public function delete(cliente $cliente)
    {
    	$cliente->delete();
    	$cliente=cliente::all();

    	return redirect()->route('cliente.index',compact('cliente'));
    }

    public function edit(cliente $cliente)
    {
    	return view('cliente.clienteEdit', compact('cliente'));
    }

    public function update(request $editInfo, cliente $cliente)
    {	
    	$cliente->numeroDocumento =$editInfo->documento;
    	$cliente->nombre =$editInfo->nombre;
    	$cliente->apellido =$editInfo->apellido;
    	$cliente->genero =$editInfo->genero;
    	$cliente->fechaNacimiento =$editInfo->fechaNacimiento;
    	$cliente->direccion =$editInfo->direccion;
    	$cliente->telefono =$editInfo->telefono;
		$cliente->email =$editInfo->email;
		$cliente->idBarrio =$editInfo->idBarrio;
		$cliente->codigoCiudad =$editInfo->codigoCiudad;

		$cliente->save();
		$cliente=cliente::all();

		return redirect()->route('cliente.index',compact('cliente'));
    }

    public function new()
    {
    	return view('cliente.clienteNew');
    }

    public function create(request $create)
    {
    	$cliente=new cliente();

    	$cliente->numeroDocumento =$create->documento;
    	$cliente->nombre =$create->nombre;
    	$cliente->apellido =$create->apellido;
    	$cliente->genero =$create->genero;
    	$cliente->fechaNacimiento =$create->fechaNacimiento;
    	$cliente->direccion =$create->direccion;
    	$cliente->telefono =$create->telefono;
		$cliente->email =$create->email;
		$cliente->idBarrio =$create->idBarrio;
		$cliente->codigoCiudad =$create->codigoCiudad;

		$cliente->save();
		$cliente=cliente::all();

		return redirect()->route('cliente.index',compact('cliente'));
    }

}
