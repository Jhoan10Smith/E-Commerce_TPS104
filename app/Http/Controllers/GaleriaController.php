<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\galeria;

class GaleriaController extends Controller
{
    public function index()
    {
        $galeria = galeria::all();
        return view('galeria.galeriaListado', compact('galeria')); 
    }

    public function home()
    {
        $galeria = galeria::all();
        return view('home', compact('galeria'));
    }
    public function delete(galeria $galeria)
    {
        $galeria->delete();
        $galeria=galeria::all();
        return redirect()->route('galeria.index',compact('galeria'));
    }

    public function edit(galeria $galeria)
    {
        return view('galeria.galeriaEdit', compact('galeria'));
    }

    public function update(request $request, galeria $galeria)
    {
        $galeria->precio = $request->precio;
        $galeria->fechaCreacion = $request->fCreacion;
        $galeria->fechaActualizacion = $request->fActualizacion;

        if($request->hasFile("imagen"))
        {
            $file = $request->file("imagen");
            $nombreArchivo = $file->getClientOriginalName();
            $file->move(public_path("img/galeria/"),$nombreArchivo);
            $galeria->imagen = $nombreArchivo;
        }

        $galeria->save();
        $galeria=galeria::all();

        return redirect()->route('galeria.index', compact('galeria'));
    }

    public function new()
    {
        return view('galeria.galeriaNew');
    }

    public function create(request $request)
    {
        $galeria = new galeria();

        $galeria->precio = $request->precio;
        $galeria->fechaCreacion = $request->fCreacion;
        $galeria->fechaActualizacion = $request->fActualizacion;

        if($request->hasFile("imagen"))
        {
            $file = $request->file("imagen");
            $nombreArchivo = $file->getClientOriginalName();
            $file->move(public_path("img/galeria/"),$nombreArchivo);
            $galeria->imagen = $nombreArchivo;
        }

        $galeria->save();
        $galeria=galeria::all();

        return redirect()->route('galeria.index', compact('galeria'));


    }
}
