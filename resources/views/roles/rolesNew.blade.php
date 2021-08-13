@extends('admin')

@section('content')
	<h1 style="margin-top: -40px;">Crear Rol</h1>
	<div style="width: 55%;">
		<form action="{{ route('roles.save') }}" method="POST">
			@csrf
			<label>Nombre Rol</label>
			<input type="text"
					name="nombreRol"
					class="form-control"
					id="nombreRol">
			<br>
			<label>Fecha creacion</label>
			<input type="date" 
					name="rolFechaCrea"
					class="form-control"
					id="rolFechaCrea"
					>
			<br>
			<label>Fecha Activacion</label>
			<input type="date" 
					name="rolFechaAct"
					class="form-control"
					id="rolFechaAct"
					>
			<br>
			<button type="submit" class="btn btn-primary">Crear</button>
			<br><br>
		</form>
    </div>
@endsection