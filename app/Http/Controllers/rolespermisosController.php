<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\rolespermisos;
use App\Models\permisos;
use App\Models\roles;


class rolespermisosController extends Controller
{
    public function index()
    {
        $rolespermisos = rolespermisos::all();
        return view('rolespermisos.rolespermisosListado', compact('rolespermisos'));
    }

    public function delete(rolespermisos $rolespermisos)
    {
        $rolespermisos->delete();
        $rolespermisos = rolespermisos::all();

        return redirect()->route('rolespermisos.index', compact('rolespermisos'));
    }

    public function edit($id)
    {
        $rolespermisos = rolespermisos::find($id);
        $permisos = permisos::all();
        $roles= roles::all();
       
        return view('rolespermisos.rolespermisosEdit', compact('rolespermisos','permisos','roles'));
    }

    public function update (request $editInfo, rolespermisos $rolespermisos)
    {
        $fecha = date('Y-m-d h:i:s');
        //$rolespermisos->idRolesPermisos = $editInfo->idRolesPermisos;
        $rolespermisos->idPermisos = $editInfo->idPermisos;
        $rolespermisos->idRoles = $editInfo->idRoles;
        //$rolespermisos->rolesPerFechaCre = $editInfo->rolesPerFechaCre;
        $rolespermisos->rolesPerFechaAct =$fecha;
        $rolespermisos->save();
            

        // return $cambiar;
        return redirect()->route('rolespermisos.index', compact('rolespermisos'));
        
    }

    public function new()
    {
        
        $rolespermisos = rolespermisos::all();
        $permisos = permisos::all();
        $roles= roles::all();
       
        return view('rolespermisos.rolespermisosNew', compact('rolespermisos','permisos','roles'));
        
    }

    public function create(request $create)
    {
        // return $crear;
        $rolespermisos = new rolespermisos();

        //$rolespermisos->idRolesPermisos = $create->idRolesPermisos;
        $rolespermisos->idPermisos = $create->idPermisos;
        $rolespermisos->idRoles = $create->idRoles;
        $rolespermisos->rolesPerFechaCre = date('Y-m-d h:i:s');
        $rolespermisos->rolesPerFechaAct = date('Y-m-d h:i:s');
        
        $rolespermisos->save();
        $rolespermisos = rolespermisos::all();

        return redirect()->route('rolespermisos.index', compact('rolespermisos'));
    }
}
