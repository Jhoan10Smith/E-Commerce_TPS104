@extends('admin')

@section('content')
	<h1 style="margin-top: -40px;">Crear Galeria</h1>
	<div style="width: 70%;">
		<form action="{{ route('galeria.create') }}" method="POST" enctype="multipart/form-data">
			@csrf

			<label>Precio</label>
			<input type="text"
					name="precio"
					class="form-control"
					id="precio">
			<br>
			<label>Fecha Creacion</label>
			<input type="date" 
					name="fCreacion"
					class="form-control"
					id="fCreacion">			
			<br>
            <label>Fecha Actualizacion</label>
			<input type="date" 
					name="fActualizacion"
					class="form-control"
					id="fActualizacion">			
			<br>
            <div class="form-group">
                <label for="exampleInputFile">Imagen</label>
                <input type="file" id="exampleInputFile" name="imagen" accept="image/png, image/jpg, imagen/gif">
            </div>
            <br>
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection