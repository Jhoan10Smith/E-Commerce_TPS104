@extends('admin')

@section('content')
	<a href="{{ route('usRol.new') }}" class="btn btn-primary">
        <i class="fa fa-user"></i> 
    	Crear Rol
    </a>
    <br><br>
	<div class="box-body" style="width: 1200px; padding-right: 20px;">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Acciones</th>
						<th>Id</th>
						<th>Id Rol</th>
						<th>Id Usuario</th>			
						<th>Fecha creacion</th>
						<th>fecha activacion</th>
						
					</tr>
				</thead>
				<tbody>
					@foreach($usRol as $datos)
						<tr>
							<td>
								<div style="padding-left: 15px; display: inline-block;">
									<a href="{{ route('usRol.edit',$datos) }}">
										<img src="https://image.flaticon.com/icons/png/512/126/126794.png" width="25px">
									</a>
								</div>
								<div style="text-align: right; display: inline-block; width: 45%">
									<a href="{{ route('usRol.delete',$datos) }}">
										<img src="https://icons555.com/images/icons-red/image_icon_delete_pic_512x512.png" width="25px">
									</a>
								</div>
							</td>
							<td>{{ $datos->idUsRol }}</td>
							<td>{{ $datos->idRoles }}</td>
							<td>{{ $datos->idUsuario }}</td>
							<td>{{ $datos->usRolFechaCreacion }}</td>
							<td>{{ $datos->usRolFechaActualizacion }}</td>
							
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection