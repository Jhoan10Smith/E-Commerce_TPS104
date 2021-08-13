@extends('admin')

@section('content')
	<a href="{{ route('articulo.new') }}" class="btn btn-primary">

        <i class="fa fa-user"></i> 
    	Crear Articulo
    </a>
    <br><br>
	<div class="box-body" style="padding-right: 20px; width: 1000px">
		
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th width="120px">Acciones</th>
					<th>Id Articulo</th>
					<th>Id Categoria</th>
					<th>Id Estado Articulo</th>
					<th>Id Proveedor</th>
					<th>Descripcion</th>
					<th>Iva</th>
					<th>Precio</th>
					<th>Nombre</th>
					<th>cantidad</th>

				</tr>
			</thead>
			<tbody>
				@foreach($articulos as $datos)
					<tr>
						<td>
							<div style="padding-left: 15px; display: inline-block;">
								<a href="{{ route('articulo.edit',$datos) }}">
									<img src="https://image.flaticon.com/icons/png/512/126/126794.png" width="25px">
								</a>
							</div>
							<div style="text-align: right; display: inline-block; width: 45%">
								<a href="{{ route('articulo.delete',$datos) }}">
									<img src="https://icons555.com/images/icons-red/image_icon_delete_pic_512x512.png" width="25px">
								</a>
							</div>
						</td>
						<td>{{ $datos->idArticulo }}</td>
						<td>{{ $datos->idCategoria }}</td>
						<td>{{ $datos->idEstadoArticulos }}</td>
						<td>{{ $datos->idProveedor }}</td>
						<td>{{ $datos->descripcion }}</td>
						<td>{{ $datos->iva }}</td>
						<td>{{ $datos->precio }}</td>
						<td>{{ $datos->nombre }}</td>
						<td>{{ $datos->cantidad }}</td>

					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection
