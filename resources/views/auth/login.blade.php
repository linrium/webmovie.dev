<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>WebMovie - Dashboard</title>

<link href="{{ url('public/assets/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ url('public/assets/styles.css') }}" rel="stylesheet">
<link href="{{ url('public/css/customs.css') }}" rel="stylesheet">
<link href="{{ url('public/assets/bootstrap-select.min.css') }}" rel="stylesheet">
<link href="{{ url('public/assets/tokenfield-typeahead.min.css') }}" rel="stylesheet">
<link href="{{ url('public/assets/bootstrap-tokenfield.min.css') }}" rel="stylesheet">

<!--Icons-->
<script src="{{ url('public/js/lumino.glyphs.js') }}"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

<!--angular 2-->
<!--<script src="{{ url('public/core-js/client/shim.min.js') }}"></script>
<script src="{{ url('public/zone.js/dist/zone.js') }}"></script>
<script src="{{ url('public/reflect-metadata/Reflect.js') }}"></script>
<script src="{{ url('public/systemjs/dist/system.src.js') }}"></script>
<script src="{{ url('systemjs.config.js') }}"></script>

<script>
	System.import('app').catch(function(err) { 
		console.error(err);
	});
</script>-->
<!--end angular 2-->

</head>

<body>
	<div class="container">
		<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					@include('admin.component.alertForm')
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
							<button class="btn btn-primary" type="submit">Login</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	</div>
	

	<script src="{{ url('public/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ url('public/js/bootstrap.min.js') }}"></script>
	<script src="{{ url('public/js/chart.min.js') }}"></script>
	<script src="{{ url('public/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ url('public/js/bootstrap-tokenfield.min.js') }}"></script>
	<script src="{{ url('public/js/typeahead.bundle.min.js') }}"></script>
	<script src="{{ url('public/js/jquery.uploadPreview.min.js') }}"></script>
	<script src="{{ url('public/js/myscript.js') }}"></script>
</body>

</html>
