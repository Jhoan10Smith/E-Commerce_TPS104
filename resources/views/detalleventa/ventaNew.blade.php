@extends('admin')

@section('content')
	<h2 style="margin-top: -45px;">Crear detalles de la Venta</h2>
	<div style="width: 70%;">
		<form action="{{ route('venta.create') }}" method="POST">
			@csrf

			<label>Cantidad</label>
			<input type="text"
					name="cantidad"
					class="form-control"
					id="cantidad">
			<br>
			<label>IVA</label>
			<input type="text" 
					name="iva"
					class="form-control"
					id="iva">
			<br>
			<label>sinIva</label>
			<input type="text" 
					name="sinIva"
					class="form-control"
					id="sinIva">
			<br>
			<label>Porcentaje Descuento</label>
			<input type="text" 
					name="porDescuento"
					class="form-control"
					id="porDescuento">
			<br>
			<label>Total Descuento</label>
			<input type="text" 
					name="totalDescuento"
					class="form-control"
					id="totalDescuento">
			<br>
			<label>Total</label>
			<input type="text" 
					name="total"
					class="form-control"
					id="total">
			<br>
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection