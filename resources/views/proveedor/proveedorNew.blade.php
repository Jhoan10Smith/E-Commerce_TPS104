@extends('admin')

@section('content')
	<h1 style="margin-top: -40px;">Crear Proveedor</h1>
	<div style="width: 55%;">
		<form action="{{ route('proveedor.save') }}" method="POST">
			@csrf

			<label>Numero de Identidad</label>
			<input type="text"
					name="numeroIdentidad"
					class="form-control"
					id="numeroIdentidad">
			<br>
			<label>Nombre</label>
			<input type="text" 
					name="nombre"
					class="form-control"
					id="nombre">
			<br>
			<label>Codigo de la Ciudad</label>
			<input type="text" 
					name="codigoCiudad"
					class="form-control"
					id="codigoCiudad">
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
			<button type="submit" class="btn btn-primary">Crear</button>
			<br><br>
		</form>
    </div>
@endsection