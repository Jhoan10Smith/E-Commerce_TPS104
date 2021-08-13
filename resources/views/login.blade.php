@extends('template.templateBase')

@section('slider')
	<section id="form" style="margin-top: 50px; margin-bottom: 50px"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form id="loginForm" action="{{ route('auth.login') }}" method="post">
							@csrf
							
							<input type="text" name="email" placeholder="Email Address">
							<input type="text" name="password" placeholder="Password">
							{{-- <span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span> --}}
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="{{ route('usuario.newClient') }}" method="POST">
							@csrf

							<input type="text"
								   name="usuario"
								   id="usuario"
								   placeholder="User name"
							>
							<input type="email" 
									name="email"
									id="email"
									placeholder="Email Address"
							>
							<input type="text" 
								   name="password"
								   id="password"
								   placeholder="Password"
							>
							<input type="text"
									name="numeroDocumento"
									id="documento"
									placeholder="Document number"
							>
							<input type="text" 
								   name="nombre"
								   id="nombre"
								   placeholder="Name"
							>
							<input type="text" 
									name="apellido"
									id="apellido"
									placeholder="Last name"
							>
							<label>Date of birth</label>
							<input type="date" 
									name="fechaNacimiento"
									id="fechaNacimiento"
									placeholder="Fecha de nacimiento"
							>
							<input type="text" 
									name="direccion"
									id="direccion"
									placeholder="Adress"
							>
							<input type="number" 
									name="telefono"
									id="telefono"
									placeholder="Phone number"
							>
							
							<button type="submit" class="btn btn-default">Signup</button> 
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
@endsection
		
