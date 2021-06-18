@extends('admin')

@section('content')
	<h1 style="margin-top: -40px;">Editar Barrio</h1>
	<div style="width: 70%;">
		<form action="{{ route('barrio.update',$barrio) }}" method="POST">
			@csrf
          	@method('PUT')

			<label>Id Barrio</label>
			<input type="text" 
					name="idBarrio" 
					value="{{ $barrio->idBarrio }}"
					class="form-control"
					id="idBarrio"
					readonly="true">
			<br>
			<label>Nombre</label>
			<input type="text"
					name="nombre"
					value="{{ $barrio->nombre }}"
					class="form-control"
					id="nombre">
			<br>
			<label>Comuna</label>
			<input type="text" 
					name="comuna"
					value="{{ $barrio->comuna }}"
					class="form-control"
					id="comuna">
						
			<br>
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection