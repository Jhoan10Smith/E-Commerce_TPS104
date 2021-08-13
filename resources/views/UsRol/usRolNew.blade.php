@extends('admin')

@section('content')
	<h1 style="margin-top: -40px;">Crear Rol</h1>
	<div style="width: 55%;">
		<form action="{{ route('usRol.save') }}" method="POST">
			@csrf
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
			<select name="idRoles" class="form-control">
				@foreach($roles as $datos)
					<option value="{{$datos->idRoles}}">
					{{$datos->nombreRol}}</option>
				@endforeach	
			</select>
			<br>
			<label>Fecha creacion</label>
			<input type="date" 
					name="usRolFechaCreacion"
					class="form-control"
					id="usRolFechaCreacion"
					>
			<br>
			<label>Fecha Actualizacion</label>
			<input type="date" 
					name="usRolFechaActualizacion"
					class="form-control"
					id="usRolFechaActualizacion"
					>
			<br>
			<button type="submit" class="btn btn-primary">Crear</button>
			<br><br>
		</form>
    </div>
@endsection