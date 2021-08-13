@extends('admin')

@section('content')
	<h2 style="margin-top: -40px;">Editar Factura</h2>
	<div style="width: 70%;">
		<form action="{{ route('factura.update',$factura) }}" method="POST">
			@csrf
          	@method('PUT')

			<label>Id Factura</label>
			<input type="text"
					name="idFactura"
					value="{{ $factura->idFactura }}"
					class="form-control"
					id="idFactura"
					readonly="true">
			<br>
			<label>Id Usuario</label>
			<select class="form-control" name= "usuario">
				@foreach ($usuario as $item)
				<option value="{{ $item->idUsuario}}">{{$item->usuario}}</option>
				@endforeach
			</select>

			<br>
			
			<label>Fecha</label>
			<input type="date" 
					name="fecha"
					value="{{ $factura->fecha }}"
					class="form-control"
					id="fecha">
			<br>
			<label>Observacion</label>
			<input type="text" 
					name="observacion"
					value="{{ $factura->observacion }}"
					class="form-control"
					id="observacion">
			<br>
			<label>Total factura</label>
			<input type="text" 
					name="totalFactura"
					value="{{ $factura->totalFactura }}"
					class="form-control"
					id="totalFactura">
			<br>
			<label>Total Iva</label>
			<input type="text" 
					name="totalIva"
					value="{{ $factura->totalIva }}"
					class="form-control"
					id="totalIva">
			<br>
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection