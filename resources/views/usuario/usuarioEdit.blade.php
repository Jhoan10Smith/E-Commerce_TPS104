@extends('admin')

@section('content')
	<h1 style="margin-top: -40px;">Editar Usuario</h1>
	<div style="width: 70%;">
		
		<form action="{{ route('usuario.update',$usuario) }}" method="POST">
			@csrf
          	@method('PUT')

			<label>Id Usuario</label>
			<input type="text" 
					name="idUsuario" 
					value="{{ $usuario->idUsuario }}"
					class="form-control"
					id="idUsuario"
					readonly="true">
			<br>

			<label>Id Tipo Documentos</label>
			<select class="form-control" name= "idTipodocumentos">
				@foreach ($tipodocumentos as $item)
					<?php if($item->idTipodocumentos == $usuario->idTipodocumentos) { ?>
						<option value="{{ $item->idTipodocumentos }}" selected>{{ $item->descripcion }}</option>
					<?php }else { ?>
						<option value="{{ $item->idTipodocumentos }}">{{ $item->descripcion }}</option>
					<?php } ?>	
				@endforeach
			</select>

			<br>

			<label>Id Genero</label>
			<select class="form-control" name= "idGenero">
				@foreach ($generos as $item)
					<?php if( $item->idGenero == $usuario->idGenero){ ?>
						<option value="{{  $item->idGenero}}" selected>{{$item->descripcion}}</option>
					<?php }else { ?>
						<option value="{{  $item->idGenero}}">{{$item->descripcion}}</option>
					<?php } ?>	
				@endforeach

			</select>

			<br>

			<label>Codigo Ciudad</label>
			<select class="form-control" name= "codigoCiudad">
				@foreach ($ciudad as $item)
					<?php if( $item->codigoCiudad == $usuario->codigoCiudad){ ?>
						<option value="{{  $item->codigoCiudad}}" selected>{{$item->nombre}}</option>
					<?php }else { ?>
						<option value="{{  $item->codigoCiudad}}">{{$item->nombre}}</option>
					<?php } ?>	
				@endforeach

			</select>
			<br>

			<label>Id Tipos</label>
			<select class="form-control" name= "idTipos">
				@foreach ($tipos as $item)
				<option value="{{ $item->idTipos}}">{{$item->descripcion}}</option>
				@endforeach
			</select>
			<br>
			
			<label>Fecha de nacimiento</label>
			<input type="date" 
					name="fechaNacimiento"
					value="{{ $usuario->fechaNacimiento }}"
					class="form-control"
					id="fechaNacimiento">
			<br>
			<label>Usuario</label>
			<input type="text" 
					name="usuario"
					value="{{ $usuario->usuario }}"
					class="form-control"
					id="usuario">
			<br>
			<label>Password</label>
			<input type="text" 
					name="password"
					value="{{ $usuario->password }}"
					class="form-control"
					id="password">
			<br>
			<label>Numero Documento</label>
			<input type="text" 
					name="numeroDocumento"
					value="{{ $usuario->numeroDocumento }}"
					class="form-control"
					id="numeroDocumento">
			<br>
			<label>Nombre</label>
			<input type="text" 
					name="nombre"
					value="{{ $usuario->nombre }}"
					class="form-control"
					id="nombre">
			<br>
			<label>Apellido</label>
			<input type="text" 
					name="apellido"
					value="{{ $usuario->apellido }}"
					class="form-control"
					id="apellido">
			<br>
			
			<label>Direccion</label>
			<input type="text" 
					name="direccion"
					value="{{ $usuario->direccion }}"
					class="form-control"
					id="direccion">
			<br>
			<label>Telefono</label>
			<input type="text" 
					name="telefono"
					value="{{ $usuario->telefono }}"
					class="form-control"
					id="telefono">
			<br>
			<label>Email</label>
			<input type="text" 
					name="email"
					value="{{ $usuario->email }}"
					class="form-control"
					id="email">
			<br>
			<label>Codigo Password</label>
			<input type="text" 
					name="codigoPassword"
					value="{{ $usuario->codigoPassword }}"
					class="form-control"
					id="codigoPassword">
			<br>
			<label>Foto</label>
			<input type="text" 
					name="foto"
					value="{{ $usuario->foto }}"
					class="form-control"
					id="foto">
			<br>
			
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection