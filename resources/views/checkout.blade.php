<!DOCTYPE html>
<html lang="en">
<head>
    @include('template.head') 
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		@include('template.header')
	</header><!--/header-->

	<div class="container" style="margin-bottom: 100px;">
			
		<div class="step-one">
			<h2 class="heading">Informacion de la compra</h2>
		</div>

		<div class="shopper-informations">
			<div class="row">
				<div class="col-sm-7">
					<div class="form-two">
						<form action="{{ route('checkout.confirm') }}" method="POST">
							@csrf

							<label>ID</label>
							<input type="text" 
							       readonly="true"
								   name="idUsuario" 
								   value="{{ session('miusuario')->idUsuario }}"
							>
							<label>Nombre</label>
							<input type="text"
								   readonly="true"
								   name="nombre" 
								   value="{{ session()->get('miusuario')->nombre}}"
							>
							<label>Correo</label>
							<input type="text" 
								   readonly="true"
								   name="email" 
								   value="{{ session()->get('miusuario')->email}}"
							>
							<label>Opciones de Bancos</label>
							<select name="banco" >
								<option value="">SELECCIONE UN BANCO</option>
								@foreach ($bancos as $banco)
									<option value="{{ $banco['bancoid']}}">{{ $banco['banconomb']}}</option> 
								@endforeach
							</select>

							<label>Opciones de Pago</label>
							<select name="formapago">
								<option>SELECCIONE UNA FORMA DE PAGO</option>
								@foreach ($formapago as $item)
									<option value="{{ $item->idformapago }}">{{ $item->descripcionPago }}</option>
								@endforeach
							</select>

							<label>Total de la compra</label>
							<input type="text" 
								   style="background-color: white; border: 2px solid dimgrey; border-radius: 8px" 
								   readonly="true"
								   name="total" 
								   value="{{$total}}"
							>
							<br>
							<button type="submit" class="btn btn-primary">Comprar</button>
							<br><br>						
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<footer id="footer"><!--Footer-->
		@include('template.footer')
	</footer><!--/Footer-->
	
	@include('template.scripts')
</body>
</html>

	


			
			