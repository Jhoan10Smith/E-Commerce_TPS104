@extends('admin')

@section('content')
	<div style="width: 70%;">
		<form action="{{ route('usRol.update',$usRol) }}" method="POST">
			@csrf
          	@method('PUT')

			<label>ID</label>
			<input type="text" 
					name="idUsRol" 
					value="{{ $usRol->idUsRol }}"
					class="form-control"
					id="idUsRol"
					readonly="true">
			<br>

			<label>Id Usuario</label>
			<select name="idUsuario"
			class="form-control" >
			@foreach($usuario as $datos)
				<option value="{{ $datos->idUsuario }}">
				{{$datos->usuario}}</option>
			@endforeach	
			</select>
			<br>
			<label>Id Rol</label>
			<select name="idRoles"
			class="form-control" >
			@foreach($roles as $item)
			<option value="{{ $item->idRoles }}">
			{{$item->nombreRol}}</option>
			@endforeach	
			</select>
			
			<br>
			<label>Fecha creacion</label>
			<input type="date" 
					name="usRolFechaCreacion"
					value="{{ $usRol->usRolFechaCreacion }}"
					class="form-control"
					id="usRolFechaCreacion"
					>
			<br>
			<label>Fecha Activacion</label>
			<input type="date" 
					name="usRolFechaActualizacion"
					value="{{ $usRol->usRolFechaActualizacion }}"
					class="form-control"
					id="usRolFechaActualizacion"
					>
			<br>
		
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection