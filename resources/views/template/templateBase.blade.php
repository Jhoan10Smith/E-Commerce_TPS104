<!DOCTYPE html>
<html lang="en">
<head>
    @include('template.head')
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		@include('template.header')
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		@yield('slider')
	</section><!--/slider-->
	
	<section>
		<div class="container"><!-- All Content -->
			<div class="row">
				<div class="col-sm-3"><!-- Aside bar -->
					@yield('aside')
				</div>
				
				<div class="col-sm-9 padding-right">
					@yield('content')
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		@include('template.footer')
	</footer><!--/Footer-->
	
	@include('template.scripts')
</body>
</html>