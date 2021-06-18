@extends('template.templateBase')

@section('aside')
	<div class="left-sidebar" style="border-right: 3px solid orange; padding-right: 10px;">
		<h2>ADMIN</h2>
		<div class="panel-group category-products" id="accordian"><!--category-products-->

			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">
						<a href="{{ route('cliente.index') }}">
							<i class="fa fa-user"></i>
							Cliente
						</a>
					</h2>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">
						<a href="{{ route('empleado.index') }}">
							<i class="fas fa-user"></i>
							Empleado
						</a>
					</h2>
				</div>
			</div>

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

			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">
						<a href="{{ route('proveedor.index') }}">
							<i class="fa fa-users"></i>
							articulo
						</a>
					</h2>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">
						<a href="{{ route('venta.index') }}">
							<i class="fas fa-cart-arrow-down"></i>
							Detalle Venta
						</a>
					</h2>
				</div>	
			</div>

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
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">
						<a href="{{ route('barrio.index') }}">
							<i class="fas fa-house-user"></i>
							Barrio
						</a>
					</h2>
				</div>	
			</div>
			
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

			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">
						<a href="{{ route('articulo.index') }}">
							<i class="fas fa-receipt"></i>
							Articulo
						</a>
					</h2>
				</div>	
			</div>
			
		</div><!--/category-products-->
	</div>
@endsection
