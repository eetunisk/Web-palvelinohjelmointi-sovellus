<!DOCTYPE html>
<html>
<head>
	<title>MyPortal</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
 
	<!-- Scripts -->
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
	
	
</head>
<body>
	@include('inc.navbar')

	<div class="container">
		@yield('content')
		<br>
		<!-- jos havaitaan virheitä syötetyissä tiedoissa, heitetään siitä ilmoitus -->
		@if(count($errors)>0)
			@foreach($errors->all() as $error)
				<div class="alert alert-danger">
				{{$error}}
				</div>
			@endforeach
		@endif
	</div>
	
</body>
</html>