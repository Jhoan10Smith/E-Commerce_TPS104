<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\roles;

class RolesController extends Controller
{
     public function index()
    {
        $roles = roles::all();
        return view('roles.rolesListado', compact('roles'));
    }

    public function delete(roles $roles)
    {   
        $roles->delete();
        $roles=roles::all();
        return redirect()->route('roles.index',compact('roles'));
    }

    public function edit(roles $roles)
    {
        return view('roles.rolesEdit', compact('roles'));
    }

    public function update(request $update, roles $roles)
    {
        $roles->nombreRol = $update->nombreRol;
        // $roles->rolFechaCrea = $update->rolFechaCrea;
        $roles->rolFechaAct = date('Y-m-d h:i:s');
       
        $roles->save();
        $roles=roles::all();
        return redirect()->route('roles.index',compact('roles'));
    }

    public function new()
    {
        return view('roles.rolesNew');
    }

    public function save(request $create)
    {
        $roles = new roles();
        $roles->nombreRol = $create->nombreRol;
        $roles->rolFechaCrea = date('Y-m-d h:i:s');
        $roles->rolFechaAct = date('Y-m-d h:i:s');
       
        $roles->save();
        $roles=roles::all();
        return redirect()->route('roles.index',compact('roles'));
       
    }
}
