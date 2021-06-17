@extends('admin')

@section('content')
	<h1 style="margin-top: -40px;">Crear Cliente</h1>
	<div style="width: 70%;">
		<form action="{{ route('cliente.create') }}" method="POST">
			@csrf

			<label>Numero de Identidad</label>
			<input type="text"
					name="documento"
					class="form-control"
					id="documento">
			<br>
			<label>Nombre</label>
			<input type="text" 
					name="nombre"
					class="form-control"
					id="nombre">
			<br>
			<label>Apellido</label>
			<input type="text" 
					name="apellido"
					class="form-control"
					id="apellido">
			<br>
			<label>Genero</label>
			<input type="text" 
					name="genero"
					class="form-control"
					id="genero">
			<br>
			<label>Fecha de nacimiento</label>
			<input type="date" 
					name="fechaNacimiento"
					class="form-control"
					id="fechaNacimiento">
			<br>
			<label>Direccion</label>
			<input type="text" 
					name="direccion"
					class="form-control"
					id="direccion">
			<br>
			<label>Telefono</label>
			<input type="text" 
					name="telefono"
					class="form-control"
					id="telefono">
			<br>
			<label>Email</label>
			<input type="text" 
					name="email"
					class="form-control"
					id="email">
			<br>
			<label>Id Barrio</label>
			<input type="text" 
					name="idBarrio"
					class="form-control"
					id="idBarrio">
			<br>
			<label>Codigo de la Ciudad</label>
			<input type="text" 
					name="codigoCiudad"
					class="form-control"
					id="codigoCiudad">
			<br>
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection