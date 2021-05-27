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


    public function editar(empleado $empleado)
    {
    	return $empleado;
    }

    public function delete(empleado $empleado)
    {
    	return $empleado;

    	// $empleado = empleado::all();

    	// return view('empleado.empleadoListado', compact('empleado'));

    }


}
