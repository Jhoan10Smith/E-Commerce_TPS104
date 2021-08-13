@extends('template.templateBase')

@section('aside')
	<div class="left-sidebar" style="border-right: 3px solid orange; padding-right: 10px;">
		<h2>Account</h2>
		<div class="panel-group category-products" id="accordian"><!--category-products-->

			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">
						<a href="{{ route('roles.index') }}"> 
							<i class="fas fa-user-tag"></i>
							Roles
						</a>
					</h2>
				</div>	
			</div>
			
			
		</div><!--/category-products-->
	</div>
@endsection

@section('content')
	<h1 style="margin-top: -40px;">Editar Usuario</h1>
	<div style="width: 70%;">
		<form action="{{ route('usuario.accountUpdate',$usuario) }}" method="POST">
			@csrf
          	@method('PUT')

			<label>ID</label>
			<input type="text" 
					name="id" 
					value="{{ $usuario->idUsuario }}"
					class="form-control"
					id="id"
					readonly="true">
			<br>
			<label>Tipo de documento</label>
			<select class="form-control" name="idTipodocumentos">
				@foreach ($tipodocumentos as $item)
					<option value="{{ $item->idTipodocumentos }}">{{ $item->descripcion }}</option>
				@endforeach
			</select>

			<br>
			<label>Codigo Ciudad</label>
			<select class="form-control" name="codigoCiudad">
				@foreach ($ciudad as $item)
					<option value="{{ $item->codigoCiudad }}">{{ $item->nombre }}</option>
				@endforeach
			</select>
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
			<label>Numero de Identidad</label>
			<input type="text"
					name="documento"
					value="{{ $usuario->numeroDocumento }}"
					class="form-control"
					id="documento">
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
			<label>Fecha de nacimiento</label>
			<input type="date" 
					name="fechaNacimiento"
					value="{{ $usuario->fechaNacimiento }}"
					class="form-control"
					id="fechaNacimiento">
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
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection
