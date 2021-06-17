@extends('admin')

@section('content')
	<a href="{{ route('factura.new') }}" class="btn btn-primary">
        <i class="fa fa-user"></i> 
    	Crear Factura
    </a>
    <br><br>
	<div class="box-body" style="width: 900px; padding-right: 25px;">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th width="120px">Acciones</th>
					<th>Codigo Documento</th>
					<th>Numero Documento</th>
					<th>Fecha</th>
					<th>Hora</th>
					<th>Codigo Cliente</th>
					<th>Id Empleado</th>
				</tr>
			</thead>
			<tbody>
				@foreach($factura as $datos)
					<tr>
						<td>
							<div style="padding-left: 15px; display: inline-block;">
								<a href="{{ route('factura.edit',$datos) }}">
									<img src="https://image.flaticon.com/icons/png/512/126/126794.png" width="25px">
								</a>
							</div>
							<div style="text-align: right; display: inline-block; width: 45%">
								<a href="{{ route('factura.delete',$datos) }}">
									<img src="https://icons555.com/images/icons-red/image_icon_delete_pic_512x512.png" width="25px">
								</a>
							</div>
						</td>
						<td>{{ $datos->codigoDocumento }}</td>
						<td>{{ $datos->numeroDocumento }}</td>
						<td>{{ $datos->fecha }}</td>
						<td>{{ $datos->hora }}</td>
						<td>{{ $datos->codigoCliente }}</td>
						<td>{{ $datos->idEmpleado }}</td>					
					</tr>
				@endforeach 
			</tbody>
		</table>
	</div><!--box-body-->
@endsection
