<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="MS Itsolutions">
		<meta name="Author" content="Mahmoud Maher">
		<meta name="Keywords" content="it, solutions"/>
		<!-- Title -->
		<title> @yield('title') </title>

		<!-- Favicon -->
		<link rel="icon" href="{{URL::asset('dashboard/assets/img/brand/favicon.png')}}" type="image/x-icon"/>
		
		@include('dashboard.layouts.head-styles')
	</head>
	
	<body class="main-body bg-primary-transparent">
		<!-- Loader -->
		<div id="global-loader">
			<img src="{{URL::asset('dashboard/assets/img/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->
		@yield('content')	

		@include('dashboard.layouts.footer-scripts')	
	</body>
</html>