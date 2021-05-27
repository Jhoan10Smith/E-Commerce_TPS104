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
}
