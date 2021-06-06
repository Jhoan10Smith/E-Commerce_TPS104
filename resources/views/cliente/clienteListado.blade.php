@extends('admin')

@section('content')
	<a href="{{ route('cliente.new') }}" class="btn btn-primary">
        <i class="fa fa-user"></i> 
    	Crear Cliente
    </a>
    <br><br>
	<div class="box-body" style="width: 1500px; padding-right: 20px;">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th width="120px">Acciones</th>
						<th>Codigo</th>
						<th>Num.Documento</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Genero</th>
						<th>Fecha de nacimiento</th>
						<th>Direccion</th>
						<th>Telefono</th>
						<th>Email</th>
						<th>Id barrio</th>
						<th>Codigo ciudad</th>
					</tr>
				</thead>
				<tbody>
					@foreach($cliente as $datos)
						<tr>
							<td>
								<div style="padding-left: 15px; display: inline-block;">
									<a href="{{ route('cliente.edit',$datos) }}">
										<img src="https://image.flaticon.com/icons/png/512/126/126794.png" width="25px">
									</a>
								</div>
								<div style="text-align: right; display: inline-block; width: 45%">
									<a href="{{ route('cliente.delete',$datos) }}">
										<img src="https://icons555.com/images/icons-red/image_icon_delete_pic_512x512.png" width="25px">
									</a>
								</div>
							</td>
							<td>{{ $datos->codigoCliente }}</td>
							<td>{{ $datos->numeroDocumento }}</td>
							<td>{{ $datos->nombre }}</td>
							<td>{{ $datos->apellido }}</td>
							<td>{{ $datos->genero }}</td>
							<td>{{ $datos->fechaNacimiento }}</td>
							<td>{{ $datos->direccion }}</td>
							<td>{{ $datos->telefono }}</td>
							<td>{{ $datos->email }}</td>
							<td>{{ $datos->idBarrio }}</td>
							<td>{{ $datos->codigoCiudad }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection