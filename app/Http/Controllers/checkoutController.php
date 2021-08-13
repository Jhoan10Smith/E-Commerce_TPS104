<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

use App\Models\formapago;
use App\Models\factura;
use App\Models\pago;

class checkoutController extends Controller
{
    public function index()
    {
        $lista = session('lista');
        $total=0;
        foreach($lista as $detalle)
        {
           $total += $detalle->SubTotal ;
        }
        $resultado=Http::get('https://devschoolcol.000webhostapp.com/tpspay/public/api/v1/bancos');  
        $respuesta = $resultado->json();
        $bancos=$respuesta['data'];

        $formapago = formapago::all();

        return view('checkout',compact('bancos','formapago','total'));
        // return view('checkout',compact('formapago','total'));
    }

    public function confirmarPago(request $request)
    {
        $factura = new factura();
        $factura->idUsuario = session()->get('miusuario')->idUsuario;
        $factura->fecha = date('Y-m-d H:m:i');
        $factura->Total_Factura = $request->total;
        $factura->save();

        $resultado= Http::post('https://devschoolcol.000webhostapp.com/tpspay/public/api/v1/pagos',
        [
            'pagobaid' => $request->banco,
            'pagoesta' => 1,
            'pagovalo' => $request->total,
            'pagorefe' => Str::random(8),
            'pagofopa' => $request->formapago,
            'pagofepa' => date('Y-m-d H:m:i'),
            'usuaemai' => session()->get('miusuario')->email,
            'ecomtoken' => '0pOIDAiEqlDaK00R1bZqND2puJ8JtU8C',
        ]);
        // return $resultado;

        $respuesta = $resultado->json();

        if ($respuesta['resultado'] == 'ok') 
        {
            session()->forget('lista');
            return redirect()->route('home');
        }
        else 
        {
            return redirect()->route('cart.index');
        }

    }
}
