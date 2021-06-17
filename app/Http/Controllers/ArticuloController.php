<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\articulo;

class ArticuloController extends Controller
{
    public function index()
    {
        $articulo = articulo::all();
        return view('articulo.articuloListado', compact('articulo'));
    }

    public function delete(articulo $articulo)
    {
        $articulo->delete();
        $articulo = articulo::all();

        return redirect()->route('articulo.index', compact('articulo'));
    }

    public function edit(articulo $articulo)
    {
        return view('articulo.articuloEdit', compact('articulo'));
    }

    public function update(request $cambiar, articulo $articulo)
    {
        $articulo->descripcion = $cambiar->documento;
        $articulo->idProveedor = $cambiar->nombre;
        $articulo->iva = $cambiar->apellido;
        $articulo->numeroDocumento = $cambiar->genero;

        $articulo->save();
        $articulo = articulo::all();
        // return $cambiar;
        return redirect()->route('articulo.index', compact('articulo'));
    }

    public function new()
    {
        return view('articulo.articuloNew');
    }

    public function create(request $crear)
    {
        // return $crear;
        $articulo = new articulo();

        $articulo->descripcion = $crear->descripcion;
        $articulo->idProveedor = $crear->idProveedor;
        $articulo->iva = $crear->iva;
        $articulo->numeroDocumento = $crear->documento;

        $articulo->save();
        $articulo = articulo::all();

        return redirect()->route('articulo.index', compact('articulo'));
    }
}
