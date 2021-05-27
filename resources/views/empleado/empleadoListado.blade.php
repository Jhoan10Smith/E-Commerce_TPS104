@extends('admin')

@section('content')
	<div class="box-body">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Acciones</th>
						<th>Id</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Usuario</th>
					</tr>
				</thead>
				<tbody>
					@foreach($empleado as $datos)
						<tr>
							<td>
								<div style="padding-left: 15px; display: inline-block;">
									<a href="">
										<img src="https://image.flaticon.com/icons/png/512/126/126794.png" width="25px">
									</a>
								</div>
								<div style="text-align: right; display: inline-block; width: 45%">
									<a href="{{ route('empleado.delete',$datos) }}">
										<img src="https://icons555.com/images/icons-red/image_icon_delete_pic_512x512.png" width="25px">
									</a>
								</div>
							</td>
							<td>{{ $datos->id }}</td>
							<td>{{ $datos->nombreEmpleado }}</td>
							<td>{{ $datos->apellidoEmpleado }}</td>
							<td>{{ $datos->usuario }}</td>							
						</tr>
					@endforeach 
				</tbody>
			</table>
		</div>
	</div>
@endsection