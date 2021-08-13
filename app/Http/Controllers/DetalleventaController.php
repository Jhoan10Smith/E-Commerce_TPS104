<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\detalleventa;
use App\Models\factura; 
use App\Models\articulo; 

class detalleventaController extends Controller
{
    public function index($id)
    {


		//$venta = detalleventa::select('detalleventa.nameUser', 'categories.nameCategory')
                

        $venta = detalleventa::select()
                ->join('articulo', 'detalleventa.idArticulo', '=', 'articulo.idArticulo')
                ->where("detalleventa.idFactura",$id)
                ->get();        


    	//$venta = detalleventa::where("idFactura",$id)->get();
    	$valoresFactura = factura::where("idFactura",$id)->get();
    	
    	return view('detalleventa.ventaListado',compact('venta','valoresFactura'));
    }

   

}
