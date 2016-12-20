<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>WebMovie - Dashboard</title>

<link href="{{ url('public/assets/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ url('public/assets/styles.css') }}" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->


</head>

<body>
	<div class="container">
		<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in to WebMovie</div>
				<div class="panel-body">
					@if(Session::has('flash_message'))
						<div class="alert alert-danger !!}">
							{!! Session::get('flash_message') !!}
						</div>
					@endif
					<form role="form"  action="{!! route('login') !!}" method="post">
						<input type="hidden" name="_token" value="{!! csrf_token() !!}">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" value="{!! old('email') !!}" type="email" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" value="{!! old('password') !!}" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<button class="btn btn-success" type="submit">Login</button>
							<a class="btn btn-primary" href="{{ url('/register') }}">Register</a>
							<a class="btn btn-default" href="{{ route('home.index') }}">Cancel</a>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	</div>
	

	<!-- jQuery-->
	<script src="{{ url('public/components/jquery/dist/jquery.min.js')}}"></script>
	<!-- tether-->
	<script src="{{ url('public/components/tether/dist/js/tether.min.js')}}"></script>
	<!-- bootstrap-->
	<script src="{{ url('public/components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<script src="{{ url('public/js/myscript.js') }}"></script>
</body>

</html>
