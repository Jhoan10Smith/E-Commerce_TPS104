@extends('template.templateBase')

@section('aside')
	<div class="left-sidebar">
		<h2>ADMIN</h2>
		<div class="panel-group category-products" id="accordian"><!--category-productsr-->

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
							<i class="fa fa-user"></i>
							Empleado
						</a>
					</h2>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">
						<a href="{{ route('proveedor.index') }}">
							<i class="fa fa-users"></i>
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

		</div><!--/category-products-->
	</div>
@endsection
