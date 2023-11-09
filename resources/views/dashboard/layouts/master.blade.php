<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

		<!-- Title -->
		<title> Engaz - @yield('title') </title>

		<!-- Favicon -->
		<link rel="icon" href="{{URL::asset('dashboard/assets/img/brand/favicon.png')}}" type="image/x-icon"/>

		@include('dashboard.layouts.head-styles')
	</head>

	<body class="main-body app sidebar-mini">
		<!-- Loader -->
		<div id="global-loader">
			<img src="{{URL::asset('dashboard/assets/img/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->
		@include('dashboard.layouts.main-sidebar')
		<!-- main-content -->
		<div class="main-content app-content">
			@include('dashboard.layouts.main-header')
			<!-- container -->
			<div class="container-fluid">
				@yield('page-header')

				@include('dashboard.partials.messages')

				@yield('content')
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
		@include('dashboard.layouts.models')
		@include('dashboard.layouts.footer')
		@include('dashboard.layouts.footer-scripts')
	</body>
</html>
