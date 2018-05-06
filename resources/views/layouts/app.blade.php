<!DOCTYPE html>
<html>

<head>
	@include('includes.head')
</head>

<body>

@include('includes.navigation')

<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			@yield('content')
		</div>
	</div>
</div>

@include('includes.scripts')

</body>
</html>