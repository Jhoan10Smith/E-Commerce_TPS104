@extends('admin')

@section('content')
	<h1 style="margin-top: -40px;">Crear Permisos</h1>
	<div style="width: 55%;">
		<form action="{{ route('permisos.save') }}" method="POST">
			@csrf
			
			<label>Nombre permisos</label>
			<input type="text"
					name="permisosNombre"
					class="form-control"
					id="permisosNombre">
			<br>
			<label>Ruta permisos</label>
			<input type="text" 
					name="permisosRuta"
					class="form-control"
					id="permisosRuta">
			<br>
			<br>
			<label>Fecha Creacion</label>
			<input type="date" 
					name="permisosFechaCre"
					class="form-control"
					id="permisosFechaCre">
			<br>
			<br>
			<label>Fecha Activacion</label>
			<input type="date" 
					name="permisosFechaAct"
					class="form-control"
					id="permisosFechaAct">
			<br>
			<button type="submit" class="btn btn-primary">Crear</button>
			<br><br>
		</form>
    </div>
@endsection