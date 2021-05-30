<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\empleado;

class EmpleadoController extends Controller
{
    public function index()
    {
    	$empleado = empleado::all();

    	return view('empleado.empleadoListado', compact('empleado'));
    }

    public function edit(empleado $empleado)
    {
    	return view('empleado.empleadoEditar', compact('empleado'));
    }

    public function update(request $editInfo, empleado $empleado)
    {
        $empleado->nombreEmpleado=$editInfo->nombre;
        $empleado->apellidoEmpleado=$editInfo->apellido;  
        $empleado->usuario=$editInfo->usuario;
        
        $empleado->save();
        $empleado=empleado::all();
        return redirect()->route('empleado.index',compact('empleado'));
    }

    public function delete(empleado $empleado)
    {
    	// return $empleado;
        $empleado->delete();
    	$empleado=empleado::all();
        return redirect()->route('empleado.index', compact('empleado'));
    }

    public function new()
    {
        return view('empleado.empleadoNuevo');
    }
    public function save(request $newInfo)
    {
        $empleado = new empleado();

        $empleado->nombreEmpleado=$newInfo->nombre;
        $empleado->apellidoEmpleado=$newInfo->apellido;
        $empleado->usuario=$newInfo->usuario;

        $empleado->save();
        $empleado=empleado::all();

        return redirect()->route('empleado.index',compact('empleado'));
    }



}
