<!DOCTYPE html>
<html>
<head>
	<title>My Application</title>
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
	
	@yield('scripts')
	@yield('footer')
</body>
</html>