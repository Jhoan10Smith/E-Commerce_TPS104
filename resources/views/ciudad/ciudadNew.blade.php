@extends('admin')

@section('content')
	<h1 style="margin-top: -40px;">Crear Ciudad</h1>
	<div style="width: 70%;">
		<form action="{{ route('ciudad.create') }}" method="POST">
			@csrf

			<label>Nombre</label>
			<input type="text" 
					name="nombre"
					class="form-control"
					id="nombre">
			<br>
			<label>Departamento</label>
			<input type="text" 
					name="departamento"
					class="form-control"
					id="departamento">
			<br>
			
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection