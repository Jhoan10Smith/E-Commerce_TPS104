@extends('admin')

@section('content')
	<a href="{{ route('barrio.new') }}" class="btn btn-primary">
        <i class="fa fa-user"></i> 
    	Crear Barrio
    </a>
    <br><br>
	<div class="box-body" style="padding-right: 20px;">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th width="120px">Acciones</th>
					<th>Id Barrio</th>
					<th>Nombre</th>
					<th>Comuna</th>
					
				</tr>
			</thead>
			<tbody>
				@foreach($barrio as $datos)
					<tr>
						<td>
							<div style="padding-left: 15px; display: inline-block;">
								<a href="{{ route('barrio.edit',$datos) }}">
									<img src="https://image.flaticon.com/icons/png/512/126/126794.png" width="25px">
								</a>
							</div>
							<div style="text-align: right; display: inline-block; width: 45%">
								<a href="{{ route('barrio.delete',$datos) }}">
									<img src="https://icons555.com/images/icons-red/image_icon_delete_pic_512x512.png" width="25px">
								</a>
							</div>
						</td>
						<td>{{ $datos->idBarrio }}</td>
						<td>{{ $datos->nombre }}</td>
						<td>{{ $datos->comuna }}</td>
						
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection