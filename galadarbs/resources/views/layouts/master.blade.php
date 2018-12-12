<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>
	@include('includes.navigation')
	<main class="container">
		<div class="fons">
			@yield('content')
		</div>
	</main>

@include('includes.foot')
		</body>
		</html>