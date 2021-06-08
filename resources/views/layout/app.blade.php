<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<title>Laravel Example</title>
	</head>
	<body class="bg-gray-100 flex flex-col justify-between">
		<header>
			<nav class="p-6 bg-blue-800 text-white flex justify-between">
				<h1>
					<a href="/" class="p-3 text-2xl"> 😎 LaravelEG</a>
				</h1>
				<ul class="flex items-center">
					<li>
						<a href="{{ route('home') }}" class="p-3">Home</a>
					</li>
					<li>
						<a href="{{ route('products') }}" class="p-3">Products</a>
					</li>
					@auth
						<li>
							Hi 
						</li>
						<li>
							<form action="{{ route('logout') }}" method="post" class="inline">
								@csrf
								<button type="submit">Logout</button>
							</form>
						</li>
					@endauth
					@guest
						<li>
							<a href="{{ route('register') }}" class="p-3">Sign Up</a>
						</li>
						<li>
							<a href="{{ route('login') }}" class="p-3">Login</a>
						</li>
					@endguest
				</ul>
			</nav>
		</header>
		<div class="p-5">
			@yield('content')
		</div>
		<!-- <footer class="p-5 text-center bg-gray-500 text-white">
			<h3>
				Copyright reserved @ Shalem Raj
			</h3>
		</footer> -->
	</body>
</html>