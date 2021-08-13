<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ciudad;

class ciudadController extends Controller
{
    public function index()
    {
    	$ciudad = ciudad::all();
    	return view('ciudad.ciudadListado', compact('ciudad'));
    }

    public function delete(ciudad $ciudad)
    {
    	$ciudad->delete();
    	$ciudad=ciudad::all();

    	return redirect()->route('ciudad.index',compact('ciudad'));
    }

    public function edit(ciudad $ciudad)
    {
    	return view('ciudad.ciudadEdit', compact('ciudad'));
    }

    public function update(request $editInfo, ciudad $ciudad)
    {	
    	$ciudad->codigoCiudad =$editInfo->codigoCiudad;
    	$ciudad->nombre =$editInfo->nombre;
    	$ciudad->departamento =$editInfo->departamento;
		  $ciudad->save();
		  $ciudad=ciudad::all();

		  return redirect()->route('ciudad.index',compact('ciudad'));
    }

    public function new()
    {
    	return view('ciudad.ciudadNew');
    }

    public function create(request $create)
    {
    	$ciudad=new ciudad();

      $ciudad->nombre =$create->nombre;
      $ciudad->departamento =$create->departamento;

      $ciudad->save();
      $ciudad=ciudad::all();

		  return redirect()->route('ciudad.index',compact('ciudad'));
    }

}
