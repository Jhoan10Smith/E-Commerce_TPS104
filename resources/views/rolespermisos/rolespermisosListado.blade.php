@extends('admin')

@section('content')
	<a href="{{ route('rolespermisos.new') }}" class="btn btn-primary">
		<i class="fa fa-user"></i>
		Crear Roles Permisos
	</a>
	<br><br>
	<div class="box-body" style="padding-right: 20px;">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th width="120px">Acciones</th>
					<th>Id Roles Permisos</th>
					<th>Id Permisos</th>
					<th>Id Roles</th>
					<th>Roles Permisos Fecha Creación</th>
					<th>Roles Permisos Fecha Actualización</th>
					
				</tr>
			</thead>
			<tbody>
				@foreach($rolespermisos as $detalle)
					<tr>
						<td>
							<div style="padding-left: 15px; display: inline-block;">
								<a href="{{ route('rolespermisos.edit',$detalle) }}">
									<img src="https://image.flaticon.com/icons/png/512/126/126794.png" width="25px">
								</a>
							</div>
							<div style="text-align: right; display: inline-block; width: 45%">
								<a href="{{ route('rolespermisos.delete',$detalle) }}">
									<img src="https://icons555.com/images/icons-red/image_icon_delete_pic_512x512.png" width="25px">
								</a>
							</div>
						</td>

				
						<td>{{ $detalle->idRolesPermisos }}</td>
						<td>{{ $detalle->idPermisos }}</td>
						<td>{{ $detalle->idRoles }}</td>
						<td>{{ $detalle->rolesPerFechaCre }}</td>
						<td>{{ $detalle->rolesPerFechaAct }}</td>
						
				@endforeach
			</tbody>
		</table>
	</div>
@endsection