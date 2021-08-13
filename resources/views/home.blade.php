@extends('template.templateBase')

@section('slider')
	@include('template.slider')
@endsection

@section('aside')
	@include('template.aside')
@endsection

@section('content')
	{{-- @include('template.content') --}}
	<div class="features_items"> 
		@foreach ($galeria as $datos)
			<form id="loginForm" action="{{ route('cart.store')}}" method="post">
				@csrf
					<input type="hidden" 
						name="PRODID" 
						value="{{ $datos->idGaleria }}" 	  
					>
					<input type="hidden"
						name="CANT" 
						value="1"    
					>

				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
								<div class="productinfo text-center">
									<div style="width: 200px; height: 178px; margin: auto">
										@if ($datos->imagen != NULL)
											<img src="{{ asset('img/galeria/'.$datos->imagen) }}" style="width: 100%; height:100%; object-fit: contain">
										@else
											<img src="{{ asset('img/galeria/noImage.jpg') }}" style="width: 100%; height:100%; object-fit: contain">
										@endif
									</div>
									<h2>{{number_format($datos->precio, 0,',', '.')}}</h2>
									<p>Easy Polo Black Edition</p>
									<button type="submit" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
								</div>
								{{-- <div class="product-overlay">
									<div class="overlay-content">
										<h2>{{number_format($datos->precio, 0,',', '.')}}</h2>
										<p>Easy Polo Black Edition</p>
										<button type="submit" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
									</div>
								</div> --}}
						</div>
					</div>
				</div>
			</form>
		@endforeach
	</div>
@endsection
