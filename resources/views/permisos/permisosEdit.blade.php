@extends('admin')

@section('content')
	<div style="width: 70%;">
		<form action="{{ route('permisos.update',$permisos) }}" method="POST">
			@csrf
          	@method('PUT')

			<label>ID</label>
			<input type="text" 
					name="id" 
					value="{{ $permisos->idPermisos }}"
					class="form-control"
					id="id"
					readonly="true">
			<br>
			<label>Nombre permisos</label>
			<input type="text"
					name="permisosNombre"
					value="{{ $permisos->permisosNombre }}"
					class="form-control"
					id="permisosNombre">
			<br>
			<label>Ruta permiso</label>
			<input type="text" 
					name="permisosRuta"
					value="{{ $permisos->permisosRuta }}"
					class="form-control"
					id="permisosRuta">
			<br>
			<label>Fecha creacion</label>
			<input type="date" 
					name="permisosFechaCre"
					value="{{ $permisos->permisosFechaCre }}"
					class="form-control"
					id="permisosFechaCre"
					>
			<br>
			<label>Fecha Activacion</label>
			<input type="date" 
					name="permisosFechaAct"
					value="{{ $permisos->permisosFechaAct }}"
					class="form-control"
					id="permisosFechaAct"
					>
			<br>
		
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection