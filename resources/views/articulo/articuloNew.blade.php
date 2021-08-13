@extends('admin')

@section('content')
	<h1 style="margin-top: -40px;">Crear articulo</h1>
	<div style="width: 70%;">
		<form action="{{ route('articulo.create') }}" method="POST">
			@csrf

			<!--label>id Articulo</label>
			<input type="text" 
					name="idArticulo" 
					class="form-control"
					id="idArticulo"
					readonly="true">
			<br-->

			<label>idCategoria</label>
			<select class="form-control" name= "idCategoria">
				@foreach ($categoria as $item)
				<option value="{{ $item->idCategoria}}">{{$item->nombre}}</option>
				@endforeach
			</select>

			<br>	

			<label>id Estado Articulo</label>
			<select class="form-control" name= "idEstadoArticulos">
				@foreach ($estadoarticulos as $item)
				<option value="{{ $item->idEstadoArticulos}}">{{$item->descripcion}}</option>
				@endforeach
			</select>

			<br>	

			<label>Id Proveedor</label>
			<select class="form-control" name= "idProveedor">
				@foreach ($proveedor as $item)
				<option value="{{ $item->idProveedor}}">{{$item->nombre}}</option>
				@endforeach
			</select>

			<br>	

			<label>Descripción</label>
			<input type="text"
					name="descripcion"
					class="form-control"
					id="descripcion">
			<br>
			
			<label>Iva</label>
			<input type="text" 
					name="iva"
					class="form-control"
					id="iva">
			
			<br>
			
			<label>Precio</label>
			<input type="text" 
					name="precio"
					class="form-control"
					id="precio">
			<br>
			<label>Nombre</label>
			<input type="text" 
					name="nombre"
					class="form-control"
					id="nombre">
			<br>
			<!--label>Imagen</label>
			<input type="text" 
					name="imagen"
					class="form-control"
					id="imagen">
			<br-->
			<label>Cantidad</label>
			<input type="text" 
					name="cantidad"
					class="form-control"
					id="cantidad">
			<br>
			
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection