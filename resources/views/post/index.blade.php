@extends('layouts.app')

@section('title', 'Příspěvky')

@section('content')

	@foreach($posts as $post)
		<div class="card mb-4">
			<img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
			<div class="card-body">
				<h2 class="card-title">{{ $post->title }}</h2>
				<p class="card-text">{{ $post->content }}</p>
				<a href="#" class="btn btn-primary">Číst dále &rarr;</a>
			</div>
		</div>
	@endforeach
@endsection