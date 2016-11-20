<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Dashboard</title>

<link href="{{ url('public/assets/bootstrap.min.css') }}" rel="stylesheet">
<!--<link href="{{ url('public/assets/datepicker3.css') }}" rel="stylesheet">-->
<link href="{{ url('public/assets/styles.css') }}" rel="stylesheet">

<!--Icons-->
<script src="{{ url('public/js/lumino.glyphs.js') }}"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>

	<!--header-->
	@include('admin.component.header')

	<!--left sidebar-->
	@include('admin.component.left-sidebar')
		
	<!--main-->
	@yield('content')
	<!--end main-->

	<script src="{{ url('public/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ url('public/js/bootstrap.min.js') }}"></script>
	<script src="{{ url('public/js/chart.min.js') }}"></script>
	<!--<script src="{{ url('public/js/chart-data.js') }}"></script>-->
	<!--<script src="{{ url('public/js/easypiechart.js') }}"></script>-->
	<!--<script src="{{ url('public/js/easypiechart-data.js') }}"></script>-->
	<script src="{{ url('public/js/bootstrap-datepicker.js') }}"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
