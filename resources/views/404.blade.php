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
            <div class="col-md-6 col-md-offset-3">
                <h1 class="text-center">404 Page not found</h1>
                <div class="row">
                    <div class="cold-md-6 col-md-offset-3">
                        <a class="btn btn-default" href="{{ route('home.index') }}">Go Home</a>
                        @if($currentUser['role'] == 'admin')
                            <a class="btn btn-default" href="{{ route('year.index') }}">Go Admin</a>
                        @else
                            <a class="btn btn-default" href="{{ route('myaccount.index') }}">Go My Account</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
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
