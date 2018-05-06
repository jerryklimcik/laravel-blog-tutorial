@extends('layouts.app')

@section('title', 'Kontakt')

@section('content')
	<div class="container">
		<h1 class="mb-2 text-center">Kontaktujte nás</h1>

		@if(!empty($errors->first()))
			<div class="row col-lg-12">
				<div class="alert alert-danger">
					<span>{{ $errors->first() }}</span>
				</div>
			</div>
		@endif

		@if(session('message'))
			<div class='alert alert-success'>
				{{ session('message') }}
			</div>
		@endif

		<div class="col-12 col-md-6">
			<form class="form-horizontal" method="POST" action="/contact">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="Name">Jméno: </label>
					<input type="text" class="form-control" id="name" 
							placeholder="jméno" name="name" 
							value="{{ old('name') }}"
							required>
				</div>

				<div class="form-group">
					<label for="email">Email: </label>
					<input type="text" class="form-control" id="email" 
							placeholder="email" name="email" 
							value="{{ old('email') }}"
							required>
				</div>

				<div class="form-group">
					<label for="message">Zpráva: </label>
					<textarea type="text" class="form-control luna-message" 
							id="message" placeholder="vaše zpáva" 
							name="message" 
							required>{{ old('message') }}</textarea>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary" value="Send">Odeslat</button>
				</div>
			</form>
		</div>
	</div> <!-- /container -->
@endsection