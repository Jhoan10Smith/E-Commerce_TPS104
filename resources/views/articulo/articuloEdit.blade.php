@extends('admin')

@section('content')
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
			
			<br>
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection