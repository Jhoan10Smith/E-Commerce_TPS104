@extends('admin')

@section('content')
	<a href="{{ route('venta.new') }}" class="btn btn-primary">
		<i class="fa fa-user"></i>
		Crear Venta
	</a>
	<br><br>
	<div class="box-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Acciones</th>
					<th>Num.Documento</th>
					<th>Cantidad</th>
					<th>IVA</th>
					<th>sinIVA</th>
					<th>Descuento</th>
					<th>Total Descuento</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				@foreach($venta as $detalle)
					<tr>
						<td>
							<div style="padding-left: 15px; display: inline-block;">
								<a href="{{ route('venta.edit',$detalle) }}">
									<img src="https://image.flaticon.com/icons/png/512/126/126794.png" width="25px">
								</a>
							</div>
							<div style="text-align: right; display: inline-block; width: 45%">
								<a href="{{ route('venta.delete',$detalle) }}">
									<img src="https://icons555.com/images/icons-red/image_icon_delete_pic_512x512.png" width="25px">
								</a>
							</div>
						</td>
						<td>{{ $detalle->numeroDocumento }}</td>
						<td>{{ $detalle->cantidad }}</td>
						<td>{{ $detalle->iva }}</td>
						<td>{{ $detalle->sinIva }}</td>
						<td>{{ $detalle->porDescuento }}</td>
						<td>{{ $detalle->totalDescuento }}</td>
						<td>{{ $detalle->total }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection