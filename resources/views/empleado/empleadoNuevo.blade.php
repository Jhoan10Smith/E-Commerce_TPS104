@extends('admin')

@section('content')
	<div style="width: 70%;">
		<form action="{{ route('empleado.save') }}" method="POST">
			@csrf

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
			<label>Usuario</label>
			<input type="text" 
					name="usuario"
					class="form-control"
					id="usuario">
			<br>
			<button type="submit" class="btn btn-primary">Crear</button>
			<br><br>
		</form>
    </div>
@endsection