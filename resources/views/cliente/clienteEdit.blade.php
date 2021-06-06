@extends('admin')

@section('content')
	<h1 style="margin-top: -40px;">Editar Cliente</h1>
	<div style="width: 70%;">
		<form action="{{ route('cliente.update',$cliente) }}" method="POST">
			@csrf
          	@method('PUT')

			<label>ID</label>
			<input type="text" 
					name="codigo" 
					value="{{ $cliente->codigoCliente }}"
					class="form-control"
					id="codigo"
					readonly="true">
			<br>
			<label>Numero de Identidad</label>
			<input type="text"
					name="documento"
					value="{{ $cliente->numeroDocumento }}"
					class="form-control"
					id="documento">
			<br>
			<label>Nombre</label>
			<input type="text" 
					name="nombre"
					value="{{ $cliente->nombre }}"
					class="form-control"
					id="nombre">
			<br>
			<label>Apellido</label>
			<input type="text" 
					name="apellido"
					value="{{ $cliente->apellido }}"
					class="form-control"
					id="apellido">
			<br>
			<label>Genero</label>
			<input type="text" 
					name="genero"
					value="{{ $cliente->genero }}"
					class="form-control"
					id="genero">
			<br>
			<label>Fecha de nacimiento</label>
			<input type="date" 
					name="fechaNacimiento"
					value="{{ $cliente->fechaNacimiento }}"
					class="form-control"
					id="fechaNacimiento">
			<br>
			<label>Direccion</label>
			<input type="text" 
					name="direccion"
					value="{{ $cliente->direccion }}"
					class="form-control"
					id="direccion">
			<br>
			<label>Telefono</label>
			<input type="text" 
					name="telefono"
					value="{{ $cliente->telefono }}"
					class="form-control"
					id="telefono">
			<br>
			<label>Email</label>
			<input type="text" 
					name="email"
					value="{{ $cliente->email }}"
					class="form-control"
					id="email">
			<br>
			<label>Id Barrio</label>
			<input type="text" 
					name="idBarrio"
					value="{{ $cliente->idBarrio }}"
					class="form-control"
					id="idBarrio">
			<br>
			<label>Codigo de la Ciudad</label>
			<input type="text" 
					name="codigoCiudad"
					value="{{ $cliente->codigoCiudad }}"
					class="form-control"
					id="codigoCiudad">
			<br>
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection