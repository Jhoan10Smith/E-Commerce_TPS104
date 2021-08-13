@extends('admin')

@section('content')
	<h1 style="margin-top: -40px;">Editar Galeria</h1>
	<div style="width: 70%;">
		<form action="{{ route('galeria.update',$galeria) }}" method="POST" enctype="multipart/form-data">
			@csrf
          	@method('PUT')

			<label>ID</label>
			<input type="text" 
					name="id" 
					value="{{ $galeria->idGaleria }}"
					class="form-control"
					id="id"
					readonly="true">
			<br>
			<label>Precio</label>
			<input type="text"
					name="precio"
					value="{{ $galeria->precio }}"
					class="form-control"
					id="precio">
			<br>
			<label>Fecha Creacion</label>
			<input type="date" 
					name="fCreacion"
					value="{{ $galeria->fechaCreacion }}"
					class="form-control"
					id="fCreacion">			
			<br>
            <label>Fecha Actualizacion</label>
			<input type="date" 
					name="fActualizacion"
					value="{{ $galeria->fechaActualizacion }}"
					class="form-control"
					id="fActualizacion">			
			<br>
            <div class="form-group">
                <label for="exampleInputFile">Imagen</label>
                <input type="file" id="exampleInputFile" name="imagen" accept="imagen/png, imagen/jpg, imagen/gif">
            </div>
			@if ($galeria->imagen != NULL)
				<div style="width: 50px;">
					<img src="{{ asset('img/galeria/'.$galeria->imagen) }}" style="width: 100%">
				</div>
			@endif
            <br>
			<button type="submit" class="btn btn-primary">Guardar</button>
			<br><br>
		</form>
    </div>
@endsection