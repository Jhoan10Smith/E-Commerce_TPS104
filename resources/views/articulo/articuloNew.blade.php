@extends('admin')

@section('content')
<<<<<<< HEAD
	<h1 style="margin-top: -40px;">Crear articulo</h1>
=======
<h1 style="margin-top: -40px;">Crear Cliente</h1>
>>>>>>> 5fbc6325a081f587c5e31a062327478ebb5ec416
	<div style="width: 70%;">
		<form action="{{ route('articulo.create') }}" method="POST">
			@csrf

<<<<<<< HEAD
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
			
=======
			<label>descripcion</label>
			<input type="text"
					name="descripcion"
					class="form-control"
					id="descripcion">
			<br>
			<label>idProveedor</label>
			<input type="text" 
					name="idProveedor"
					class="form-control"
					id="idProveedor">
			<br>
			<label>iva</label>
			<input type="text" 
					name="iva"
					class="form-control"
					id="iva">
			<br>
			<label>numeroDocumento</label>
			<input type="text" 
					name="documento"
					class="form-control"
					id="documento">
			<br>
>>>>>>> 5fbc6325a081f587c5e31a062327478ebb5ec416
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection