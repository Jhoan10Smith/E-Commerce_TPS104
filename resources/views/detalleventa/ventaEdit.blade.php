@extends('admin')

@section('content')
	<h2 style="margin-top: -45px;">Editar Venta</h2>
	<div style="width: 70%;">
		<form action="{{ route('venta.update',$venta) }}" method="POST">
			@csrf
          	@method('PUT')

			<label>Numero Documento</label>
			<input type="text" 
					name="numeroDocumento" 
					value="{{ $venta->numeroDocumento }}"
					class="form-control"
					id="numeroDocumento"
					readonly="true">
			<br>
			<label>Cantidad</label>
			<input type="text"
					name="cantidad"
					value="{{ $venta->cantidad }}"
					class="form-control"
					id="cantidad">
			<br>
			<label>IVA</label>
			<input type="text" 
					name="iva"
					value="{{ $venta->iva }}"
					class="form-control"
					id="iva">
			<br>
			<label>sinIva</label>
			<input type="text" 
					name="sinIva"
					value="{{ $venta->sinIva }}"
					class="form-control"
					id="sinIva">
			<br>
			<label>Porcentaje Descuento</label>
			<input type="text" 
					name="porDescuento"
					value="{{ $venta->porDescuento }}"
					class="form-control"
					id="porDescuento">
			<br>
			<label>Total Descuento</label>
			<input type="text" 
					name="totalDescuento"
					value="{{ $venta->totalDescuento }}"
					class="form-control"
					id="totalDescuento">
			<br>
			<label>Total</label>
			<input type="text" 
					name="total"
					value="{{ $venta->total }}"
					class="form-control"
					id="total">
			<br>
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection