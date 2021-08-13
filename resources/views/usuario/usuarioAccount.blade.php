@extends('template.templateBase')

@section('aside')
	<div class="left-sidebar" style="border-right: 3px solid orange; padding-right: 10px;">
		<h2>Account</h2>
		<div class="panel-group category-products" id="accordian">
            <h2 style="color: dimgrey">{{ session()->get('miusuario')->nombre }}</h2>
            <h2 style="color: dimgrey">{{ session()->get('miusuario')->apellido }}</h2>	
		</div>
	</div>
@endsection

@section('content')
    <br><br>
	<div class="box-body" style="width: 1500px; padding-right: 20px;">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th width="100px">Acciones</th>
					<th width="70px">ID</th>
					<th>Tipo documento</th>
					<th>Codigo Ciudad</th>
					<th>Usuario</th>
					<th>Email</th>
					<th>Password</th>
					<th>Num.Documento</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Fecha de nacimiento</th>
					<th>Direccion</th>
					<th>Telefono</th>
				</tr>
			</thead>
			<tbody>
                <tr>

                    <td>
                        <div style="padding-left: 15px; display: inline-block;">
                            <a href="{{ route('usuario.accountEdit',session()->get('miusuario')->idUsuario) }}">
                                <img src="https://image.flaticon.com/icons/png/512/126/126794.png" width="25px">
                            </a>
                        </div>
                    </td>
                    @foreach ($account as $item)
                        <td> {{ $item->idUsuario }}</td>
                        <td>{{ $item->idTipodocumentos }}</td>
                        <td>{{ $item->codigoCiudad }}</td>
                        <td>{{ $item->usuario }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->password }}</td>
                        <td>{{ $item->numeroDocumento }}</td>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->apellido }}</td>
                        <td>{{ $item->fechaNacimiento }}</td>
                        <td>{{ $item->direccion }}</td>
                        <td>{{ $item->telefono }}</td>
                    @endforeach
                </tr>
			</tbody>
		</table>
	</div>
    <br><br>
@endsection
