@extends('admin')

@section('content')
	<h2 style="margin-top: -45px;">Crear Roles Permisos</h2>
	<div style="width: 70%;">
		<form action="{{ route('rolespermisos.create') }}" method="POST">
			@csrf

			<!--label>Id Roles Permisos</label>
			<input type="text" 
					name="idRolesPermisos" 
					class="form-control"
					id="idRolesPermisos"
					readonly="true">
			<br-->


			<label>Id Permisos</label>
			<select class="form-control" name= "idPermisos">
				@foreach ($permisos as $item)
				<option value="{{ $item->idPermisos}}">{{$item->permisosNombre}}</option>
				@endforeach
			</select>
			<br>

			<label>Id Roles</label>
			<select class="form-control" name= "idRoles">
				@foreach ($roles as $item)
				<option value="{{ $item->idRoles}}">{{$item->nombreRol}}</option>
				@endforeach
			</select>
			<br>
			
			<!--label>Roles Permisos Fecha Creación</label>
			<input type="text"
					name="rolesPerFechaCre"
					class="form-control"
					id="rolesPerFechaCre">
			<br-->
			<!--label>Roles Permisos Fecha Actualización</label>
			<input type="text" 
					name="rolesPerFechaAct"
					class="form-control"
					id="rolesPerFechaAct">
			<br-->
			
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection