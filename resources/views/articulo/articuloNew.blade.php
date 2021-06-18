@extends('admin')

@section('content')
	<h1 style="margin-top: -40px;">Crear articulo</h1>
	<div style="width: 70%;">
		<form action="{{ route('articulo.create') }}" method="POST">
			@csrf

			<label>Codigo del Articulo</label>
			<input type="text"
					name="documento"
					class="form-control"
					id="documento">
			<br>
			<label>Descripción</label>
			<input type="text" 
					name="nombre"
					class="form-control"
					id="nombre">
			<br>
			<label>Id Proveedor</label>
			<input type="text" 
					name="apellido"
					class="form-control"
					id="apellido">
			<br>
			<label>Iva</label>
			<input type="text" 
					name="genero"
					class="form-control"
					id="genero">
			<br>
			
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection