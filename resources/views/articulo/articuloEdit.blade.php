@extends('admin')

@section('content')
<<<<<<< HEAD
	<h1 style="margin-top: -40px;">Editar Articulo</h1>
	<div style="width: 70%;">
		<form action="{{ route('articulo.update',$articulo) }}" method="POST">
			@csrf
          	@method('PUT')

			<label>Codigo del Articulo</label>
			<input type="text" 
					name="codigoArticulo" 
					value="{{ $articulo->codigoArticulo }}"
					class="form-control"
					id="codigoArticulo"
					readonly="true">
			<br>
			<label>Descripción</label>
			<input type="text"
					name="descripcion"
					value="{{ $articulo->descripcion }}"
					class="form-control"
					id="descripcion">
			<br>
			<label>Id Proveedor</label>
			<input type="text" 
					name="idProveedor"
					value="{{ $articulo->idProveedor }}"
					class="form-control"
					id="idProveedor">
			<br>
			<label>Iva</label>
			<input type="text" 
					name="iva"
					value="{{ $articulo->iva }}"
					class="form-control"
					id="iva">
			
=======
<?php
	echo $articulo;
?>
	<h1 style="margin-top: 0px;">Editar Articulo</h1>
	<div style="width: 50%;">
		<form action="{{ route('articulo.update',$articulo) }}" method="POST">
			@csrf
			@method('PUT')

			<label>codigoArticulo</label>
			<input type="text" 
					name="codigo" 
					value="{{ $articulo->codigoArticulo }}"
					class="form-control"
					id="codigo"
					readonly="true">
			<br>
			<label>descripcion</label>
			<input type="text"
					name="documento"
					value="{{ $articulo->descripcion }}"
					class="form-control"
					id="documento">
			<br>
			<label>idProveedor</label>
			<input type="text" 
					name="nombre"
					value="{{ $articulo->idProveedor }}"
					class="form-control"
					id="nombre">
			<br>
			<label>iva</label>
			<input type="text" 
					name="apellido"
					value="{{ $articulo->iva }}"
					class="form-control"
					id="apellido">
			<br>
			<label>numeroDocumento</label>
			<input type="text" 
					name="genero"
					value="{{ $articulo->numeroDocumento }}"
					class="form-control"
					id="genero">
>>>>>>> 5fbc6325a081f587c5e31a062327478ebb5ec416
			<br>
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection