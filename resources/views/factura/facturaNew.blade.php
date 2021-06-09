@extends('admin')

@section('content')
	<h2 style="margin-top: -40px;">Crear Factura</h2>
	<div style="width: 70%;">
		<form action="{{ route('factura.save') }}" method="POST">
			@csrf

			<label>numeroDocumento</label>
			<input type="text" 
					name="numeroDocumento"
					class="form-control"
					id="numeroDocumento">
			<br>
			<label>Fecha</label>
			<input type="date" 
					name="fecha"
					class="form-control"
					id="fecha">
			<br>
			<label>Hora</label>
			<input type="time"
					min="0:00:00"
					max="23:59:59" 
					name="hora"
					class="form-control"
					id="hora">
			<br>
			<label>codigoCliente</label>
			<input type="text" 
					name="codigoCliente"
					class="form-control"
					id="codigoCliente">
			<br>
			<label>idEmpleado</label>
			<input type="text" 
					name="idEmpleado"
					class="form-control"
					id="idEmpleado">
			<br>
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection