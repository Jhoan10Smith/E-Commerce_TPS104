<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class authController extends Controller
{
    public function index()
    {
        return view('login');
    } 

    public function login(Request $request)
    {

        $dataUsuario= Usuario::where([
                                       ['email', '=', $request->email],
                                       ['password', $request->password],
                                     ]
                                    )->first();
        
        // return $dataUsuario;
        if($dataUsuario)
        {

            if(!empty($_REQUEST["recordar"])) 
            {                                                    //1año 365d 24h 60min 60s 
                setcookie ("email",$request->email,time()+ (1 * 365 * 24 * 60 * 60));
                setcookie ("password",$request->password,time()+ (1 * 365 * 24 * 60 * 60));
                setcookie ("recordar",$request->recordar,time()+ (1 * 365 * 24 * 60 * 60));

            } 
            else
            {
                setcookie("email","");
                setcookie("password","");
                setcookie("recordar","");
            }

            session(['miusuario' => $dataUsuario]);
            session(['permisos'=>$dataUsuario->permisos()]);
            session(['auth' => true]);
            
            $message='Bienvenido';
            session(['mensaje' => $message]);

            return redirect()->route('home');
        }   
        else
        {
            session(['auth' => false]);
            
            $message='Credenciales invalidas';
            session(['mensaje' => $message]);
            
            return redirect()->route('auth.index');
        }                         

    }

    public function logout()
    {
        session()->flush(); //Borrar todos los datos de session
        return redirect()->route('home');        
    }

}
