<!DOCTYPE html>
<html>
	<head>
		<title>Inventory system</title>
		<meta name="robots" content="noindex, nofollow">
		<!-- Include CSS File Here -->
		<link rel="stylesheet" href="style.css"/>
		<!-- Include CSS File Here -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="login.js"></script>
			</head>
	<body>
		
        @if(Session::has('global'))
            <p>{{ Session::get('global')   }}</p>
        @endif

		@include('layout.navigation')
		@yield('content')

	</body>
</html>