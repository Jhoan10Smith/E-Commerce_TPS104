@extends('admin')

@section('content')
	
    <br><br>
	<div class="box-body" style="padding-right: 20px;">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th width="120px">Acciones</th> 
					<th>Id Factura</th>
					<th>Id Usuario</th>
					<th>Fecha</th>
					<th>Observacion</th>
					<th>Total Factura</th>
					<th>total Iva</th>
				</tr>
			</thead>
			<tbody>
				@foreach($factura as $datos)
					<tr>
						<td>
							<div style="padding-left: 15px; display: inline-block;">
								<a href="{{ route('venta.index',$datos) }}">
									<img src="https://image.flaticon.com/icons/png/512/126/126794.png" width="25px">
								</a>
							</div>
							
						</td>
						<td>{{ $datos->idFactura }}</td>
						<td>{{ $datos->idUsuario }}</td>
						<td>{{ $datos->fecha }}</td>
						<td>{{ $datos->observacion }}</td>
						<td>{{ $datos->Total_Factura }}</td>
						<td>{{ $datos->Total_Factura}}</td>					
					</tr>
				@endforeach 
			</tbody>
		</table>
	</div><!--box-body-->
@endsection
