<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\permisos;

class PermisosController extends Controller
{
     public function index()
    {
        $permisos = permisos::all();
        return view('permisos.permisosListado', compact('permisos'));
    }

       public function edit(permisos $permisos)
    {
        return view('permisos.permisosEdit', compact('permisos'));
    }

    public function update(request $update, permisos $permisos)
    {
        $permisos->permisosNombre = $update->permisosNombre;
        $permisos->permisosRuta = $update->permisosRuta;
      

        $permisos->save();
        $permisos=permisos::all();
        return redirect()->route('permisos.index',compact('permisos'));
    }
    public function delete(permisos $permisos)
    {   
        $permisos->delete();
        $permisos=permisos::all();
        return redirect()->route('permisos.index',compact('permisos'));
    }

 

    public function new()
    {
        return view('permisos.permisosNew');
    }

    public function save(request $create)
    {
        $permisos = new permisos();
        
        $permisos->permisosNombre = $create->permisosNombre;
        $permisos->permisosRuta = $create->permisosRuta;
        $permisos->permisosFechaCre = $create->permisosFechaCre;
        $permisos->permisosFechaAct = $create->permisosFechaAct;

        $permisos->save();
        $permisos=permisos::all();

        return redirect()->route('permisos.index',compact('permisos'));
    }
}
