@extends ('main.master')

@section ('content')

<header class="masthead-ty d-flex">
	<div class="container text-center my-auto" data-aos="fade-up">
		<h1 class="mb-2 text-white">Thanks for signing up!</h1>
		@if (!empty($portfolioEmail))
			<h3 class="mb-3 text-white">
				Having a portfolio and a resume is a huge plus! Send them if you have one!
			</h3>
			@foreach ($portfolioEmail as $email)
				<h3 class="mb-1 text-white">
					{{ $email }}
				</h3>
			@endforeach
		@endif
		<h3 class="mt-3 mb-5 text-white">
			Please wait for our email! You're one step closer in joining the most awesome organization in UST!
		</h3>
		<a class="btn btn-primary btn-xl js-scroll-trigger" href="/">Go Back</a>
	</div>
	<div class="overlay"></div>
</header>

@endsection