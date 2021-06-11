@extends('admin')

@section('content')
<h1 style="margin-top: -40px;">Crear Cliente</h1>
	<div style="width: 70%;">
		<form action="{{ route('articulo.create') }}" method="POST">
			@csrf

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
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection