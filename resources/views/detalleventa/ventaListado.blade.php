@extends('admin')
@section('content')

	<br><br>
	<div class="box-body" style="padding-right: 20px;">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>		
					<th>idFactura</th>
					<th>IdArticulo</th>
					<th>precio</th>
					<th>cantidad</th>
					<th>iva</th>
					<th>sinIva</th>
					<th>porDescuento</th>
					<th>totalDescuento</th>
					<th>totalDetalle</th>
				</tr>
			</thead>
			<tbody>
				@foreach($venta as $detalle)
					<tr>
						<td>{{ $detalle->idFactura }}</td>
						<td>{{ $detalle->nombre }}</td>
						<td>{{ $detalle->precio }}</td>
						<td>{{ $detalle->cantidad }}</td>
						<td>${{ $detalle->iva }}</td>
						<td>${{ $detalle->sinIva }}</td>
						<td>%{{ $detalle->porDescuento }}</td>
						<td>${{ $detalle->totalDescuento }}</td>
						<td>${{ number_format($detalle->totalDetalle, 2, ',', '.') }}</td>
					</tr>
					<!--?php $valorFactura += $detalle->totalDetalle ?-->
				@endforeach

				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td><b>Total:</b></td>
					@foreach($valoresFactura as $valor)
						<td>${{ number_format($valor->Total_Factura, 2, ',', '.') }}</td>
					@endforeach
				</tr>				
			</tbody>
		</table>
	</div>
@endsection