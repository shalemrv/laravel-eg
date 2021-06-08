@extends('layout.app')

@section('content')
<div class="flex justify-center product-list-container">
	<div class="w-5/12 bg-white p-6 rounded-lg">
		<h3 class="text-3xl my-2 pb-3">Create new account</h3>
		<form action="{{ route('register') }}" method="post">
			@csrf
			<div class="my-2">
				<label for="name" class="sr-only">Name</label>
				<input
					id="name"
					name="name"
					value="{{ old('name') }}"
					type="text"
					placeholder="Your name"
					class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror"
				/>

				@error('name')
					<div class="text-red-500 mt-2 text-sm">
						{{ $message }}
					</div>
				@enderror
			</div>
			<div class="my-2">
				<label for="username" class="sr-only">Username</label>
				<input
					id="username"
					name="username"
					value="{{ old('username') }}"
					type="text"
					placeholder="Your username"
					class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('username') border-red-500 @enderror"
				/>
				@error('username')
					<div class="text-red-500 mt-2 text-sm">
						{{ $message }}
					</div>
				@enderror
			</div>
			<div class="my-2">
				<label for="email" class="sr-only">Email</label>
				<input
					id="email"
					name="email"
					value="{{ old('email') }}"
					type="email"
					placeholder="Your email"
					class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror"
				/>
				@error('email')
					<div class="text-red-500 mt-2 text-sm">
						{{ $message }}
					</div>
				@enderror
			</div>
			<div class="my-2">
				<label for="password" class="sr-only">Paswword</label>
				<input
					id="password"
					name="password"
					type="password"
					placeholder="Your password"
					class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror"
				/>
				@error('password')
					<div class="text-red-500 mt-2 text-sm">
						{{ $message }}
					</div>
				@enderror
			</div>
			<div class="my-2">
				<label for="password_confirmation" class="sr-only">Paswword</label>
				<input
					id="password_confirmation"
					name="password_confirmation"
					type="password"
					placeholder="Confirm password"
					class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password_confirmation') border-red-500 @enderror"
				/>
			</div>
			<div class="text-center">
				<button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">
					Submit
				</button>
			</div>
		</form>
	</div>
</div>
@endsection
