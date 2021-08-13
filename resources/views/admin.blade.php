@extends('template.templateBase')

@section('aside')
	<div class="left-sidebar" style="border-right: 3px solid orange; padding-right: 10px;">
		<h2>ADMIN</h2>
		<div class="panel-group category-products" id="accordian"><!--category-products-->

			@if (array_search("usuario.index", array_column(session()->get('permisos'),'permisosRuta')) > -1)
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">
							<a href="{{ route('usuario.index') }}">
								<i class="fas fa-users"></i>
								Usuarios
							</a>
						</h2>
					</div>	
				</div>
			@endif
			

			@if (array_search("usuario.index", array_column(session()->get('permisos'),'permisosRuta')) > -1)
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">
						<a href="{{ route('roles.index') }}"> 
							<i class="fas fa-user-tag"></i>
							Roles
						</a>
					</h2>
				</div>	
			</div>
			@endif

			@if (array_search("usuario.index", array_column(session()->get('permisos'),'permisosRuta')) > -1)
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">
						<a href="{{ route('permisos.index') }}">
							<i class="fas fa-person-booth"></i>
							Permisos
						</a>
					</h2>
				</div>	
			</div>
			@endif

			@if (array_search("usuario.index", array_column(session()->get('permisos'),'permisosRuta')) > -1)
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">
						<a href="{{ route('usRol.index') }}"> 
							<i class="fas fa-address-book"></i>
							Usuarios-Roles
						</a>
					</h2>
				</div>	
			</div>
			@endif
			
			@if (array_search("usuario.index", array_column(session()->get('permisos'),'permisosRuta')) > -1)
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">
						<a href="{{ route('rolespermisos.index') }}"> 
							<i class="fas fa-address-book"></i>
							Roles-Permisos
						</a>
					</h2>
				</div>	
			</div>
			@endif

			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">
						<a href="{{ route('proveedor.index') }}">
							<i class="fas fa-users"></i>
							Proveedores
						</a>
					</h2>
				</div>
			</div>

			{{-- <div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">
						<a href="{{ route('venta.index') }}">
							<i class="fas fa-cart-arrow-down"></i>
							Detalle Venta
						</a>
					</h2>
				</div>	
			</div> --}}

			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">
						<a href="{{ route('factura.index') }}">
							<i class="fas fa-receipt"></i>
							Factura
						</a>
					</h2>
				</div>	
			</div>
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">
						<a href="{{ route('articulo.index') }}">
							<i class="fas fa-box-open"></i>
							Articulo
						</a>
					</h2>
				</div>	
			</div>
			@if (array_search("usuario.index", array_column(session()->get('permisos'),'permisosRuta')) > -1)
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">
						<a href="{{ route('ciudad.index') }}">
							<i class="fas fa-city"></i>
							Ciudad
						</a>
					</h2>
				</div>	
			</div>
			@endif
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">
						<a href="{{ route('galeria.index') }}">
							<i class="fas fa-grip-vertical"></i>
							Galeria
						</a>
					</h2>
				</div>	
			</div>
		</div><!--/category-products-->
	</div>
@endsection
