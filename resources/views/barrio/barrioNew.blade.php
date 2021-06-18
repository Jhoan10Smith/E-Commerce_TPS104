@extends('admin')

@section('content')
	<h1 style="margin-top: -40px;">Crear Barrio</h1>
	<div style="width: 70%;">
		<form action="{{ route('barrio.create') }}" method="POST">
			@csrf

			<label>Id Barrio</label>
			<input type="text"
					name="idBarrio"
					class="form-control"
					id="idBarrio">
			<br>
			<label>Nombre</label>
			<input type="text" 
					name="nombre"
					class="form-control"
					id="nombre">
			<br>
			<label>Comuna</label>
			<input type="text" 
					name="comuna"
					class="form-control"
					id="comuna">
			<br>
						
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection