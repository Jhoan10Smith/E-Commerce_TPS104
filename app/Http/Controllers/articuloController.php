<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\articulo;
use App\Models\categoria;
use App\Models\estadoarticulos;
use App\Models\proveedor;

class articuloController extends Controller
{
    public function index()
    {
        $articulos = articulo::all();
        return view('articulo.articuloListado', compact('articulos'));

    }


    public function delete(articulo $articulo)
    {
        $articulo->delete();
        $articulo = articulo::all();

        return redirect()->route('articulo.index', compact('articulo'));
    }

    public function edit($id)
    {
        $articulo = articulo::find($id);
        $categoria = categoria::all();
        $estadoarticulos = estadoarticulos::all();
        $proveedor = proveedor::all();

        return view('articulo.articuloEdit', compact('articulo','categoria','estadoarticulos','proveedor'));
    }

    public function update (request $editInfo, articulo $articulo)
    {
        $articulo->idCategoria = $editInfo->idCategoria;
        $articulo->idEstadoArticulos = $editInfo->idEstadoArticulos;
        $articulo->idProveedor = $editInfo->idProveedor;
        $articulo->descripcion = $editInfo->descripcion;
        $articulo->iva = $editInfo->iva;
        $articulo->precio  = $editInfo->precio;
        $articulo->nombre = $editInfo->nombre;
        //$articulo->imagen = $editInfo->imagen;
        $articulo->cantidad = $editInfo->cantidad;

        $articulo->save();
        $articulo = articulo::all();
        
        return redirect()->route('articulo.index', compact('articulo'));
        
    }

    public function new()
    {
        
        $articulo = articulo::all();
        $categoria = categoria::all();
        $estadoarticulos = estadoarticulos::all();
        $proveedor = proveedor::all();
        return view('articulo.articuloNew', compact('articulo','categoria','estadoarticulos','proveedor'));
    }

    public function create(request $create)
    {
        // return $crear;
        $articulo = new articulo();

        $articulo->idCategoria = $create->idCategoria;
        $articulo->idEstadoArticulos = $create->idEstadoArticulos;
        $articulo->idProveedor = $create->idProveedor;
        $articulo->descripcion = $create->descripcion;
        $articulo->iva = $create->iva;
        $articulo->precio  = $create->precio;
        $articulo->nombre = $create->nombre;
        //$articulo->imagen = $create->imagen;
        $articulo->cantidad = $create->cantidad;
       
        $articulo->save();
        $articulo = articulo::all();

        return redirect()->route('articulo.index', compact('articulo'));
    }
}
