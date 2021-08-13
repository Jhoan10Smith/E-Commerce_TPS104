<!DOCTYPE html>
<html lang="en">
<head>
    @include('template.head')
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		@include('template.header')
	</header><!--/header-->

	<section id="cart_items">
		<div class="container">
			<div class="table-responsive cart_info">
				<table class="table table-condensed" border="4" bordercolor="#fff" style="margin-bottom: 0;">
					<thead>
						<tr class="cart_menu" align="center">
							{{-- <td class="description">Description</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>  --}}
							<td>Prod. Id</td>
							<td>Imagen</td>
							<td>Cantidad</td>
							<td>Precio</td>
							<td>Iva</td>
							<td>Sin Iva</td>
							<td>SubTotal</td>
						</tr>
					</thead>
					<tbody>
						@if (session()->get('lista'))
						@php($total=0)
						
							@foreach ($productos as $producto)
							<tr>
								<td> 
									<a href="{{ route('cart.delete',$producto->Idproducto) }} " > 
										<img src="https://icons555.com/images/icons-red/image_icon_delete_pic_512x512.png" width="25px">
									</a>&nbsp;&nbsp;&nbsp;
									{{$producto->Idproducto}}
								</td>
								{{-- <td><img src="{{ asset('img/galeria/'.$galeria[$producto->Idproducto-1]['imagen']) }}" style="width: 100px; height:100px;"></td> --}}
								<td><img src="{{ asset('img/galeria/'.$producto->imagen) }}" style="width: 100px; height:100px;"></td>
								<td>{{$producto->Cantidad}}</td>
								<td>{{$producto->Precio}}</td>
								<td>{{$producto->Iva}}</td>
								<td>{{number_format($producto->SinIva, 2, ',', '.')}}</td>
								<td>{{number_format($producto->SubTotal, 2, ',', '.')}}</td> 
								@php ($total += $producto->SubTotal)
							</tr>
							@endforeach
							 <tr>
								<td colspan="6" style="text-align:right;"><b>Total: &nbsp</b></td> 
								<td><b>{{number_format($total, 0,',', '.')}}</b></td>    
							 </tr>
						@endif
					</tbody>
				</table>
			</div>
			<div style="text-align: right; padding-right: 125px;">
				<a class="btn btn-primary" href="{{ route('checkout.index') }}" style="margin-top: -50px; ">Pagar</a>
			</div>
			
		</div>
	</section> <!--/#cart_items-->

	<footer id="footer"><!--Footer-->
		@include('template.footer')
	</footer><!--/Footer-->
	
	@include('template.scripts')
</body>
</html>

	
