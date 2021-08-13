<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use App\Models\usuario;
use App\Models\tipodocumentos;
use App\Models\generos;
use App\Models\ciudad;
use App\Models\tipos;

use App\Models\usrol;

class UsuarioController extends Controller
{
    public function index()
    {
    	$usuario = usuario::all();
    	return view('usuario.usuarioListado', compact('usuario'));
    }

    public function delete(usuario $usuario)
    {
    	$usuario->delete();
    	$usuario=usuario::all();

    	return redirect()->route('usuario.index',compact('usuario')); 
    }

    public function edit(usuario $usuario)
    {
    	$tipodocumentos = tipodocumentos::all();
        $generos = generos::all();
        $ciudad = ciudad::all();
        $tipos= tipos::all();
        
        return view('usuario.usuarioEdit', compact('usuario','tipodocumentos','generos','ciudad','tipos'));
    }

    public function update(request $editInfo, usuario $usuario)
    {		
    	$usuario->idTipodocumentos =$editInfo->idTipodocumentos;
    	$usuario->idGenero =$editInfo->idGenero;
    	$usuario->codigoCiudad =$editInfo->codigoCiudad;
    	$usuario->idTipos =$editInfo->idTipos;
    	$usuario->usuario =$editInfo->usuario;
    	$usuario->password =$editInfo->password;
    	$usuario->numeroDocumento =$editInfo->numeroDocumento;
		$usuario->nombre =$editInfo->nombre;
		$usuario->apellido =$editInfo->apellido;
		$usuario->fechaNacimiento =$editInfo->fechaNacimiento;
		$usuario->direccion =$editInfo->direccion;
		$usuario->telefono =$editInfo->telefono;
		$usuario->email =$editInfo->email;
		$usuario->codigoPassword =$editInfo->codigoPassword;
		$usuario->foto =$editInfo->foto;

		$usuario->save();
		$usuario=usuario::all();

        return redirect()->route('usuario.index',compact('usuario'));
    }

    public function new()
    {
    	$usuario=usuario::all();
        $tipodocumentos = tipodocumentos::all();
        $generos = generos::all();
        $ciudad = ciudad::all();
        $tipos= tipos::all();
        
        return view('usuario.usuarioNew', compact('usuario','tipodocumentos','generos','ciudad','tipos'));
    }

    public function create(request $create)
    {
    	$usuario =new usuario();
            
    	$usuario->idTipodocumentos =$create->idTipodocumentos;
    	$usuario->idGenero =$create->idGenero;
    	$usuario->codigoCiudad =$create->codigoCiudad;
    	$usuario->idTipos =$create->idTipos;
    	$usuario->usuario =$create->usuario;
    	$usuario->password =$create->password;
    	$usuario->numeroDocumento =$create->numeroDocumento;
		$usuario->nombre =$create->nombre;
		$usuario->apellido =$create->apellido;
		$usuario->fechaNacimiento =$create->fechaNacimiento;
		$usuario->direccion =$create->direccion;
		$usuario->telefono =$create->telefono;
		$usuario->email =$create->email;
		$usuario->codigoPassword =$create->codigoPassword;
		$usuario->foto =$create->foto;

		$usuario->save();
		$usuario = usuario::all();

        
		return redirect()->route('usuario.index',compact('usuario'));
    }

	// Cliente

	public function newClient(request $request)
	{
		$usuario=new usuario();

		$usuario->usuario =$request->usuario;
    	$usuario->password =$request->password;
    	$usuario->numeroDocumento =$request->documento;
    	$usuario->nombre =$request->nombre;
    	$usuario->apellido =$request->apellido;
    	$usuario->fechaNacimiento =$request->fechaNacimiento;
    	$usuario->direccion =$request->direccion;
    	$usuario->telefono =$request->telefono;
		$usuario->email =$request->email;
		$usuario->codigoPassword = Str::random(8);

		$usuario->save();


		$usuarioRol=new usRol();
		$usuarioRol->idRoles = 3;
		$usuarioRol->idUsuario = $usuario->idUsuario;
		$usuarioRol->usRolFechaCreacion = date("Y-m-d H:i:s");
		$usuarioRol->usRolFechaActualizacion = date("Y-m-d H:i:s");
		$usuarioRol->save();

		return redirect()->route('auth.index');
	}

	public function account()
	{
		$sql="SELECT * FROM usuarios WHERE idUsuario = :id";

		$account = DB::select(DB::raw($sql), array( 'id' => session()->get('miusuario')->idUsuario ));

		return view('usuario.usuarioAccount',compact('account'));
	}

	public function accountEdit(usuario $usuario)
    {
        $ciudad=ciudad::all();
		$tipodocumentos=tipodocumentos::all();
    	return view('usuario.usuarioAccountEdit', compact('usuario','ciudad','tipodocumentos'));
    }

    public function accountUpdate(request $editInfo, usuario $usuario)
    {
		$usuario->usuario =$editInfo->usuario;
		$usuario->idTipodocumentos = $editInfo->idTipodocumentos;
		$usuario->codigoCiudad = $editInfo->codigoCiudad;
    	$usuario->password =$editInfo->password;
    	$usuario->numeroDocumento =$editInfo->documento;
    	$usuario->nombre =$editInfo->nombre;
    	$usuario->apellido =$editInfo->apellido;
    	$usuario->fechaNacimiento =$editInfo->fechaNacimiento;
    	$usuario->direccion =$editInfo->direccion;
    	$usuario->telefono =$editInfo->telefono;
		$usuario->email =$editInfo->email;
		$usuario->codigoPassword =$editInfo->codigoPassword;

		$usuario->save();

		// return $this->account();
		return redirect()->route('usuario.account');
    }


}
