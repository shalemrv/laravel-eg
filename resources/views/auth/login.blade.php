@extends('layout.app')

@section('content')
<div class="flex justify-center product-list-container">
	<div class="w-5/12 bg-white p-6 rounded-lg">
		<h3 class="text-3xl my-2 pb-3">Create new account</h3>
		@if (session('status'))
			{{ session('status') }}
		@endif
		<form action="{{ route('login') }}" method="post">
			@csrf
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
			<div class="text-center">
				<button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">
					Submit
				</button>
			</div>
		</form>
	</div>
</div>
@endsection
