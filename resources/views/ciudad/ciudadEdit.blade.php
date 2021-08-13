@extends('admin')

@section('content')
	<h1 style="margin-top: -40px;">Editar Ciudad</h1>
	<div style="width: 70%;">
		<form action="{{ route('ciudad.update',$ciudad) }}" method="POST">
			@csrf
          	@method('PUT')

			<label>Codigo Ciudad</label>
			<input type="text" 
					name="codigoCiudad" 
					value="{{ $ciudad->codigoCiudad }}"
					class="form-control"
					id="codigoCiudad"
					readonly="true">
			<br>
			<label>Nombre</label>
			<input type="text"
					name="nombre"
					value="{{ $ciudad->nombre }}"
					class="form-control"
					id="nombre">
			<br>
			<label>Departamento</label>
			<input type="text" 
					name="departamento"
					value="{{ $ciudad->departamento }}"
					class="form-control"
					id="departamento">
						
			<br>
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection