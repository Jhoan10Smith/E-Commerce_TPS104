@extends('admin')

@section('content')
	<div style="width: 70%;">
		<form action="{{ route('proveedor.update',$proveedor) }}" method="POST">
			@csrf
          	@method('PUT')

			<!--label>Id Proveedor</label>
			<input type="text" 
					name="idProveedor" 
					value="{{ $proveedor->idProveedor }}"
					class="form-control"
					id="idProveedor"
					readonly="true">
			<br-->
			<label>Id Tipos</label>
			<select class="form-control" name= "idTipos">
				@foreach ($tipos as $item)
					<?php if( $item->idTipos == $proveedor->idTipos){ ?>
						<option value="{{$item->idTipos}}" selected>{{$item->descripcion}}</option>
					<?php }else { ?>
						<option value="{{ $item->idTipos}}">{{$item->descripcion}}</option>
					<?php } ?>	
				@endforeach

			</select>
			<br>

			<label>Codigo Ciudad</label>
			<select class="form-control" name= "codigoCiudad">
					@foreach ($ciudad as $item)
					<?php if($item->codigoCiudad ==$proveedor->codigoCiudad){ ?>
						<option value="{{$item->codigoCiudad}}" selected>{{$item->nombre}}</option>
					<?php }else { ?>
						<option value="{{ $item->codigoCiudad}}">{{$item->nombre}}</option>
					<?php } ?>	
				@endforeach


			</select>

			<br>
			
			<label>Numero de Identificación</label>
			<input type="text" 
					name="numeroIdentidad"
					value="{{ $proveedor->numeroIdentidad }}"
					class="form-control"
					id="numeroIdentidad">
			<br>
			<label>Nombre</label>
			<input type="text" 
					name="nombre"
					value="{{ $proveedor->nombre }}"
					class="form-control"
					id="nombre">
			<br>
		
			<label>Direccion</label>
			<input type="text" 
					name="direccion"
					value="{{ $proveedor->direccion }}"
					class="form-control"
					id="direccion">
			<br>
			<label>Telefono</label>
			<input type="text" 
					name="telefono"
					value="{{ $proveedor->telefono }}"
					class="form-control"
					id="telefono">
			<br>
			<label>Email</label>
			<input type="text" 
					name="email"
					value="{{ $proveedor->email }}"
					class="form-control"
					id="email">
			<br>
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection