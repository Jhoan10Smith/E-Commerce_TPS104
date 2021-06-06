@extends('admin')

@section('content')
	<a href="{{ route('proveedor.new') }}" class="btn btn-primary">
        <i class="fa fa-user"></i> 
    	Crear Proveedor
    </a>
    <br><br>
	<div class="box-body" style="width: 1200px; padding-right: 20px;">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Acciones</th>
						<th>Id</th>
						<th>Num.Identidad</th>
						<th>Nombre</th>
						<th>Codigo ciudad</th>
						<th>Direccion</th>
						<th>Telefono</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					@foreach($proveedor as $datos)
						<tr>
							<td>
								<div style="padding-left: 15px; display: inline-block;">
									<a href="{{ route('proveedor.edit',$datos) }}">
										<img src="https://image.flaticon.com/icons/png/512/126/126794.png" width="25px">
									</a>
								</div>
								<div style="text-align: right; display: inline-block; width: 45%">
									<a href="{{ route('proveedor.delete',$datos) }}">
										<img src="https://icons555.com/images/icons-red/image_icon_delete_pic_512x512.png" width="25px">
									</a>
								</div>
							</td>
							<td>{{ $datos->idProveedor }}</td>
							<td>{{ $datos->numeroIdentidad }}</td>
							<td>{{ $datos->nombre }}</td>
							<td>{{ $datos->codigoCiudad }}</td>
							<td>{{ $datos->direccion }}</td>
							<td>{{ $datos->telefono }}</td>
							<td>{{ $datos->email }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection