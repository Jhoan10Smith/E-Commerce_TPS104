@extends('admin')

@section('content')
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
			<br>
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection