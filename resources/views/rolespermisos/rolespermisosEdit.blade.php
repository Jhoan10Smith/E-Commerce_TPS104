@extends('admin')

@section('content')
	<h2 style="margin-top: -45px;">Editar RolesPermisos</h2>
	<div style="width: 70%;">
		<form action="{{ route('rolespermisos.update',$rolespermisos) }}" method="POST">
			@csrf
          	@method('PUT')

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
					<?php if($item->idPermisos == $rolespermisos->idPermisos){ ?>
						<option value="{{ $item->idPermisos}}" selected>{{$item->permisosNombre}}</option>
					<?php }else { ?>
						<option value="{{ $item->idPermisos}}">{{$item->permisosNombre}}</option>
					<?php } ?>	
				@endforeach
			</select>
			<br>

			<label>Id Roles</label>
			<select class="form-control" name= "idRoles">
				@foreach ($roles as $item)
				<?php if($item->idRoles == $rolespermisos->idRoles){ ?>
						<option value="{{ $item->idRoles}}" selected>{{$item->nombreRol}}</option>
					<?php }else { ?>
						<option value="{{ $item->idRoles}}">{{$item->nombreRol}}</option>
					<?php } ?>	
				
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