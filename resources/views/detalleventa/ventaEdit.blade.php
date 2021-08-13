@extends('admin')

@section('content')
	<h2 style="margin-top: -45px;">Editar Venta</h2>
	<div style="width: 70%;">
		<form action="{{ route('venta.update',$venta) }}" method="POST">
			@csrf
          	@method('PUT')

          	<label>Id Detalle</label>
			<input type="text"
					name="idDetalle"
					value="{{ $venta->idDetalle }}"
					class="form-control"
					id="idDetalle"
					readonly="true">
			<br>

          	

			<label>Id Articulo</label>
			<select class="form-control" name= "idArticulo">
				@foreach ($articulo as $item)
				<option value="{{ $item->idArticulo}}">{{$item->descripcion}}</option>
				@endforeach
			</select>


			<br>
			<label>Precio</label>
			<input type="text"
					name="precio"
					value="{{ $venta->precio }}"
					class="form-control"
					id="precio">
			<br>
			<label>Cantidad</label>
			<input type="text" 
					name="cantidad"
					value="{{ $venta->cantidad }}"
					class="form-control"
					id="cantidad">
			<br>
			<label>Iva</label>
			<input type="text" 
					name="iva"
					value="{{ $venta->iva }}"
					class="form-control"
					id="iva">
			<br>
			<label>Sin Iva</label>
			<input type="text" 
					name="sinIva"
					value="{{ $venta->sinIva }}"
					class="form-control"
					id="sinIva">
			<br>
			<label>Por Descuento</label>
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
			<label>Total Detalle</label>
			<input type="text" 
					name="totalDetalle"
					value="{{ $venta->totalDetalle }}"
					class="form-control"
					id="totalDetalle">
			<br>
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection