@extends('admin')

@section('content')
	<h1 style="margin-top: -40px;">Editar Articulo</h1>
	<div style="width: 70%;">
		<form action="{{ route('articulo.update',$articulo) }}" method="POST">
			@csrf
          	@method('PUT')

			<label>id Articulo</label>
			<input type="text" 
					name="idArticulo" 
					value="{{ $articulo->idArticulo }}"
					class="form-control"
					id="idArticulo"
					readonly="true">
			<br>

			<label>id Categoria</label>
				<select class="form-control" name= "idCategoria">
				@foreach ($categoria as $item)
				<?php if($item->idCategoria ==  $articulo->idCategoria ){ ?>
						<option value="{{ $item->idCategoria}}" selected>{{$item->nombre}}</option>
					<?php }else { ?>
						<option value="{{ $item->idCategoria}}">{{$item->nombre}}</option>
					<?php } ?>	
				@endforeach
			</select>
			<br>

			<label>id Estado Articulo</label>
			<select class="form-control" name= "idEstadoArticulos">
				@foreach ($estadoarticulos as $item)
				<?php if($item->idEstadoArticulos ==  $articulo->idEstadoArticulos){ ?>
						<option value="{{ $item->idEstadoArticulos}}" selected>{{$item->descripcion}}</option>
					<?php }else { ?>
						<option value="{{ $item->idEstadoArticulos}}">{{$item->descripcion}}</option>
					<?php } ?>	
				@endforeach
			</select>
			<br>


			<label>Id Proveedor</label>
				<select class="form-control" name= "idProveedor">
				@foreach ($proveedor as $item)
				<?php if($item->idProveedor ==  $articulo->idProveedor){ ?>
						<option value="{{ $item->idProveedor}}" selected>{{$item->nombre}}</option>
					<?php }else { ?>
						<option value="{{ $item->idProveedor}}">{{$item->nombre}}</option>
					<?php } ?>	
				
				@endforeach
			</select>
			<br>

			<label>Descripción</label>
			<input type="text"
					name="descripcion"
					value="{{ $articulo->descripcion }}"
					class="form-control"
					id="descripcion">
			<br>
			
			<label>Iva</label>
			<input type="text" 
					name="iva"
					value="{{ $articulo->iva }}"
					class="form-control"
					id="iva">
			
			<br>
			
			<label>Precio</label>
			<input type="text" 
					name="precio"
					value="{{ $articulo->precio }}"
					class="form-control"
					id="precio">
			<br>
			<label>Nombre</label>
			<input type="text" 
					name="nombre"
					value="{{ $articulo->nombre }}"
					class="form-control"
					id="nombre">
			<br>
			<!--label>Imagen</label>
			<input type="text" 
					name="imagen"
					value="{{ $articulo->imagen }}"
					class="form-control"
					id="imagen">
			<br-->
			<label>Cantidad</label>
			<input type="text" 
					name="cantidad"
					value="{{ $articulo->cantidad }}"
					class="form-control"
					id="cantidad">
			<br>
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection