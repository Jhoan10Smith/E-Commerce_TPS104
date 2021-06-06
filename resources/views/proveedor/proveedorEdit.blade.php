@extends('admin')

@section('content')
	<div style="width: 70%;">
		<form action="{{ route('proveedor.update',$proveedor) }}" method="POST">
			@csrf
          	@method('PUT')

			<label>ID</label>
			<input type="text" 
					name="id" 
					value="{{ $proveedor->idProveedor }}"
					class="form-control"
					id="id"
					readonly="true">
			<br>
			<label>Numero de Identidad</label>
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
					id="apellido">
			<br>
			<label>Codigo de la Ciudad</label>
			<input type="text" 
					name="codigoCiudad"
					value="{{ $proveedor->codigoCiudad }}"
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