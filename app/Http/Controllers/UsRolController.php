<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usRol;
use App\Models\Roles;
use App\Models\usuario;


class UsRolController extends Controller
{
     public function index()
    {
        $usRol = usRol::all();
        return view('UsRol.usRolListado', compact('usRol'));
    }

    public function delete(usRol $usRol)
    {   
        $usRol->delete();
        $usRol=usRol::all();
        return redirect()->route('usRol.index',compact('usRol'));
    }

    public function edit(usRol $usRol)
    {
        $usuario=usuario::all();
        $roles=roles::all();
        return view('usRol.usRolEdit', compact('usRol','roles','usuario'));
    }

    public function update(request $update, usRol $usRol)
    {

        $usRol->idRoles = $update->idRoles;
        $usRol->idUsuario = $update->idUsuario; 
        $usRol->usRolFechaActualizacion = $update->usRolFechaActualizacion;
        $usRol->usRolFechaCreacion = $update->usRolFechaCreacion;
               
        $usRol->save();
        $usRol=roles::all();
        return redirect()->route('usRol.index',compact('usRol'));
    }

    public function new()
    {
        $usuario=usuario::all();
        $roles = Roles::all();
        return view('usRol.usRolNew', compact('roles','usuario'));
    }

    public function save(request $create)
    {
        $usRol = new usRol();
        
        $usRol->idUsuario = $create->idUsuario;
        $usRol->idRoles = $create->idRoles;
        $usRol->usRolFechaActualizacion = $create->usRolFechaActualizacion;
        $usRol->usRolFechaCreacion = $create->usRolFechaCreacion;
       
       
        $usRol->save();
        $usRol=usRol::all();
        return redirect()->route('usRol.index',compact('usRol'));
       
    }
}
