@extends('admin')

@section('content')
	<div style="width: 70%;">
		<form action="{{ route('roles.update',$roles) }}" method="POST">
			@csrf
          	@method('PUT')

			<label>ID</label>
			<input type="text" 
					name="idRoles" 
					value="{{ $roles->idRoles }}"
					class="form-control"
					id="idRoles"
					readonly="true">
			<br>
			<label>Nombre Rol</label>
			<input type="text"
					name="nombreRol"
					value="{{ $roles->nombreRol }}"
					class="form-control"
					id="nombreRol">
			<br>
			<label>Fecha creacion</label>
			<input type="date" 
					name="rolFechaCrea"
					value="{{ $roles->rolFechaCrea }}"
					class="form-control"
					id="rolFechaCrea"
					>
			<br>
			<label>Fecha Activacion</label>
			<input type="date" 
					name="rolFechaAct"
					value="{{ $roles->rolesFechaAct }}"
					class="form-control"
					id="rolFechaAct"
					>
			<br>
		
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection