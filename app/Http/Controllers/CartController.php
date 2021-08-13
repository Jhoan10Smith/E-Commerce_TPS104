<?php

namespace App\Http\Controllers;
use App\Models\detalleventa;
use App\Models\galeria;
// use App\Models\Ventas;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() 
    {

        if (!session()->get('lista')) {
            session(['lista' => array()]); 
     
        }
    }
    
    public function index()
    {

        $productos=session()->get('lista');
        return view('cart',compact('productos'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (array_search($request->PRODID,array_column(session()->get('lista'),'Idproducto')) > -1)
        {
            //Lo encontro en tonces actualizo

            //Posicion esta el Producto dentro del arreglo de datos en session
            $posicion =array_search($request->PRODID,array_column(session()->get('lista'),'Idproducto'));
            //dd($posicion);
            //Traigo la lista de la session para actualizar el producto
            $lista = session('lista');  

            
            $lista[$posicion]->Cantidad += $request->CANT;
            $lista[$posicion]->SinIva =  $lista[$posicion]->Precio * $lista[$posicion]->Cantidad;
            $lista[$posicion]->SubTotal = $lista[$posicion]->SinIva * $lista[$posicion]->Iva /100 + $lista[$posicion]->SinIva;
            session(['lista' => $lista]);
        }
        else
        {
          //No lo encontro, entonces lo creo

          /* Busco el Producto */
          //$producto = Producto::find($request->PRODID);  
        //   $producto = Producto::where('idProducto', $request->PRODID)->first();
          $producto = galeria::where('idGaleria', $request->PRODID)->first();
          if($producto) //Valido que el producto exista y traigo los datos
          {

            //Traigo la lista de la sesion para gestionarla
            $lista = session('lista');
            
            //Creo un nuevo objeto detalle de venta
            $detaVenta= new detalleventa();
            $detaVenta->Idproducto= $request->PRODID;
            $detaVenta->imagen= $producto->imagen;//Asigno la referencia de la imagen
            $detaVenta->Precio = $producto->precio;
            $detaVenta->Cantidad= $request->CANT;
            $detaVenta->Iva = $producto->Iva;
            $detaVenta->SinIva = $detaVenta->Precio * $detaVenta->Cantidad;
            $detaVenta->SubTotal = ($detaVenta->SinIva * $detaVenta->Iva)/100 + $detaVenta->SinIva;
            
            //adiciono el nuevo producto a la lista de la session
            $lista[]=$detaVenta;
            
            //Publico la lista refrecando la session
            session(['lista' => $lista]);
          }
        }

         return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($Idproducto)
    {

        $posicion =array_search($Idproducto,array_column(session()->get('lista'),'Idproducto'));

        $lista = session('lista');
  
        unset($lista[$posicion]); //Elimino el producto del arreglo conociendo la posicion

        
        //Reordeno los indices del arreglo
        $lista =array_values($lista);

        //Publico la lista resfrecando la session
        session(['lista' => $lista]);
        return $this->index(); 

    }

    public function confirmarPedido(Request $request)
    {
        //Traigo la Lista que esta en session
        $lista = session('lista');
        $total=0;
        $totalImpuesto=0;
        //Recorro la lista item por item para calcular el total a pagar y de impuestos
        foreach($lista as $detalle)
        {
            
           $total += $detalle->SubTotal ;
           $totalImpuesto += $detalle->SubTotal - $detalle->SinIva;
        }

        //Creo un nuevo objeto de venta para inserta en la tabla ventas, es
        //equivaletne a la factura
        $ventas = new Ventas();
        $ventas->Idusuario= session('miusuario')->idusuario;
        $ventas->ValorTotal = $total;
        $ventas->ValorImpuestos= $totalImpuesto;
        $ventas->Fecha=date("Y-m-d");
        $ventas->Hora= date("H:m:i");

        //La guardar el registro de la tabla Ventas se crea el id de la venta
        //necesario para insertar los titme en la tabla DetalleVentas
        $ventas->save();
        
        //Guardo los items de lista es decir los productos(items) y se envia
        //el id de la venta creado anteriormente 
        $this->guardarListaDetalleVenta($ventas->IdVenta);
        
        //Limpio la lista de la sesion
        session()->forget('lista');

        //llamo la vista de confirmacion exitosa
        return $this->index();

    }


    public function guardarListaDetalleVenta($idVenta)
    {
        //Traigo la Lista que esta en session
        $lista = session('lista');

        //Recorro la lista para ir insertando en la tabla DetalleVentas
        //los productos comprados (items que compré)
        foreach($lista as $detalle)
        {
            $detalle->Idventa = $idVenta; //Le doy el id de la venta
            $detalle->save();
        }
    }

    public function clearList()
    {
        //Limpido la lista de la session
        session()->forget('lista');
        return $this->index();
    }


}
