@extends('layouts.app')

@section('title', $post->title)

@section('content')
	<div class="card mb-4">
		<img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
		<div class="card-body">
			<h2 class="card-title">{{ $post->title }}</h2>
			<small>
				{{ $post->user->name }} |
				{{ $post->created_at->format('d.m.Y') }} |
				<a href="{{ route('category.show', $post->category->slug) }}">
					{{ $post->category->name }}
				</a>
			</small>
			<p class="card-text">{{ $post->content }}</p>
		</div>
	</div>
	<a href="{{ route('post.index') }}" class="btn btn-primary">Zpět na příspěvky</a>
@endsection