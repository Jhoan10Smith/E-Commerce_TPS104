@extends('admin')

@section('content')
	<a href="{{ route('usuario.new') }}" class="btn btn-primary">
        <i class="fa fa-user"></i> 
    	Crear Usuario
    </a>
    <br><br>
	<div class="box-body" style="width: 1500px; padding-right: 30px;">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th width="120px"> Acciones</th>
					<th width="70px">Id Usuario</th>
					<th>Id Tipo Documento</th>
					<th>Id Genero</th>
					<th>Id Codigo Ciudad</th>
					<th>Id Tipos</th>
					<th>Usuario</th>
					<th>Password</th>
					<th>Numero Documento</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Fecha Nacimiento</th>
					<th>Direccion</th>
					<th>Telefono</th>
					<th>Email</th>
					<th>Codigo Password</th>
					<th>Foto</th>
				</tr>
			</thead>
			<tbody>
				@foreach($usuario as $datos)
					<tr>
						<td>
							<div style="padding-left: 15px; display: inline-block;">
								<a href="{{ route('usuario.edit',$datos) }}">
								<img src="https://image.flaticon.com/icons/png/512/126/126794.png" width="25px">
								</a>
							</div>
							<div style="text-align: right; display: inline-block; width: 45%">
								<a href="{{ route('usuario.delete',$datos) }}">
								<img src="https://icons555.com/images/icons-red/image_icon_delete_pic_512x512.png" width="25px">
								</a>
							</div>
						</td>

						<td>{{ $datos->idUsuario }}</td>
						<td>{{ $datos->idTipodocumentos }}</td>
						<td>{{ $datos->idGenero }}</td>
						<td>{{ $datos->codigoCiudad }}</td>
						<td>{{ $datos->idTipos }}</td>
						<td>{{ $datos->usuario }}</td>
						<td>{{ $datos->password }}</td>
						<td>{{ $datos->numeroDocumento }}</td>
						<td>{{ $datos->nombre }}</td>
						<td>{{ $datos->apellido }}</td>
						<td>{{ $datos->fechaNacimiento }}</td>
						<td>{{ $datos->direccion }}</td>
						<td>{{ $datos->telefono }}</td>
						<td>{{ $datos->email }}</td>
						<td>{{ $datos->codigoPassword }}</td>
						<td>{{ $datos->foto }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection