@extends('admin')

@section('content')
	<a href="{{ route('articulo.new') }}" class="btn btn-primary">
<<<<<<< HEAD
        <i class="fa fa-user"></i> 
    	Crear Articulo
    </a>
    <br><br>
	<div class="box-body" style="width: 1500px; padding-right: 20px;">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th width="120px">Acciones</th>
					<th>Codigo del Articulo</th>
					<th>Descripción</th>
					<th>Id Proveedor</th>
					<th>Iva</th>
					
=======
        <i class="fa fa-user"></i>
    	Crear Articulo
    </a>
    <br><br>
	<div class="box-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Acciones</th>
					<th>codidoArticulo</th>
					<th>descripcion</th>
					<th>idProveedor</th>
					<th>iva</th>
					<th>numeroDocumento</th>
<<<<<<< HEAD
>>>>>>> 5fbc6325a081f587c5e31a062327478ebb5ec416
=======
					<th>un th para probar el push</th>
					<th>otro th para probar el push</th>
>>>>>>> f93ccae47b67354a5aa68fa5d75b290b616157d0
				</tr>
			</thead>
			<tbody>
				@foreach($articulo as $datos)
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
						<td>{{ $datos->codigoArticulo }}</td>
						<td>{{ $datos->descripcion }}</td>
						<td>{{ $datos->idProveedor }}</td>
						<td>{{ $datos->iva }}</td>
<<<<<<< HEAD
						
=======
						<td>{{ $datos->numeroDocumento }}</td>
>>>>>>> 5fbc6325a081f587c5e31a062327478ebb5ec416
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 5fbc6325a081f587c5e31a062327478ebb5ec416
