@extends('admin')

@section('content')
<a href="{{ route('galeria.new') }}" class="btn btn-primary">
    <i class="fas fa-plus-square"></i>
    Crear Producto
</a>
<br><br>
<div class="box-body" style="padding-right: 20px;">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Acciones</th>
                <th>Imagen</th>
                <th>ID</th>
                <th>Precio</th>
                <th>Fecha Creacion</th>
                <th>Fecha Actualizacion</th>
                <th>Imagen</th>

            </tr>
        </thead>
        <tbody>
            @foreach($galeria as $datos)
                <tr>
                    <td>
                        <div style="padding-left: 15px; display: inline-block;">
                            <a href="{{ route('galeria.edit',$datos) }}">
                                <img src="https://image.flaticon.com/icons/png/512/126/126794.png" width="25px">
                            </a>
                        </div>
                        <div style="text-align: right; display: inline-block; width: 45%">
                            <a href="{{ route('galeria.delete',$datos) }}">
                                <img src="https://icons555.com/images/icons-red/image_icon_delete_pic_512x512.png" width="25px">
                            </a>
                        </div>
                    </td>
                    <td>
                        @if ($datos->imagen != NULL)
                            <div style="width: 50px; height: 40px;">
                                <img src="{{ asset('img/galeria/'.$datos->imagen) }}" style="width: 100%; height:100%; object-fit: contain">
                            </div>
                        @else
                            Sin Imagen
                        @endif
                    </td>
                    <td>{{ $datos->idGaleria }}</td>
                    <td>{{ $datos->precio }}</td>
                    <td>{{ $datos->fechaCreacion }}</td>
                    <td>{{ $datos->fechaActualizacion }}</td>
                    <td>{{ $datos->imagen }}</td>                     
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection