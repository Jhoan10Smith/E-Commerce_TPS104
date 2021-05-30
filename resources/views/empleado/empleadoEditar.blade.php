@extends('admin')

@section('content')
	<?php
	echo "<pre>".$empleado."</pre>";
	?>
	<div style="width: 70%;">
		<form action="{{ route('empleado.update',$empleado) }}" method="POST">
			@csrf
          	@method('PUT')

			<label>ID</label>
			<input type="text" 
					name="id" 
					value="{{ $empleado->id }}"
					class="form-control"
					id="id"
					readonly="true">
			<br>
			<label>Nombre</label>
			<input type="text"
					name="nombre"
					value="{{ $empleado->nombreEmpleado }}"
					class="form-control"
					id="nombre">
			<br>
			<label>Apellido</label>
			<input type="text" 
					name="apellido"
					value="{{ $empleado->apellidoEmpleado }}"
					class="form-control"
					id="apellido">
			<br>
			<label>Usuario</label>
			<input type="text" 
					name="usuario"
					value="{{ $empleado->usuario }}"
					class="form-control"
					id="usuario">
			<br>
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection