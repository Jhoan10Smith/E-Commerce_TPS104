@extends('admin')

@section('content')
	<h2 style="margin-top: -40px;">Editar Factura</h2>
	<div style="width: 70%;">
		<form action="{{ route('factura.update',$factura) }}" method="POST">
			@csrf
          	@method('PUT')

			<label>codigoDocumento</label>
			<input type="text"
					name="codigoDocumento"
					value="{{ $factura->codigoDocumento }}"
					class="form-control"
					id="codigoDocumento"
					readonly="true">
			<br>
			<label>numeroDocumento</label>
			<input type="text" 
					name="numeroDocumento"
					value="{{ $factura->numeroDocumento }}"
					class="form-control"
					id="numeroDocumento">
			<br>
			<label>Fecha</label>
			<input type="date" 
					name="fecha"
					value="{{ $factura->fecha }}"
					class="form-control"
					id="fecha">
			<br>
			<label>Hora</label>
			<input type="time"
					min="0:00:00"
					max="23:59:59" 
					name="hora"
					value="{{ $factura->hora }}"
					class="form-control"
					id="hora">
			<br>
			<label>codigoCliente</label>
			<input type="text" 
					name="codigoCliente"
					value="{{ $factura->codigoCliente }}"
					class="form-control"
					id="codigoCliente">
			<br>
			<label>idEmpleado</label>
			<input type="text" 
					name="idEmpleado"
					value="{{ $factura->idEmpleado }}"
					class="form-control"
					id="idEmpleado">
			<br>
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection