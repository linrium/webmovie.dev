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
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Signup to WebMovie</div>
				<div class="panel-body">
					<form action="{!! url('/register') !!}" method="post">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <div class="form-group">
                                <label for="txtName" class="control-label">Username</label>

                                <input type="txt" class="form-control" id="txtName" value="{!! old('txtName') !!}" name="txtName" placeholder="Please enter user name">

                            </div>
                            <div class="form-group">
                                <label for="txtEmail" class="control-label">Email</label>

                                <input type="email" class="form-control" id="txtEmail" value="{!! old('txtEmail') !!}" name="txtEmail" placeholder="Please enter user name">

                            </div>
                            <div class="form-group">
                                <label for="txtPassword" class="control-label">Password</label>

                                <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Please enter user name">

                            </div>
                            <div class="form-group">
                                <label for="txtRepassword" class="control-label">Repassword</label>

                                <input type="password" class="form-control" id="txtRepassword" name="txtRepassword" placeholder="Please enter user name">

                            </div>
                            <div class="form-group">
                                <div class="">
                                    <button type="submit" class="btn btn-success">Sign up</button>
                                    <a class="btn btn-primary" href="{{ route('login') }}">Sign in</a>
                                    <a class="btn btn-default"  href="{{ route('home.index') }}">Go Home</a>
                                </div>
                            </div>
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
</body>

</html>
