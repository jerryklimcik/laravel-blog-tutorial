<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand" href="{{ url('/') }}">Blog</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
					<a class="nav-link" href="{{ url('/') }}">Domů <span class="sr-only">(current)</span> </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">O nás</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ url('contact') }}">Kontakt</a>
				</li>
				@if(Auth::check())
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" id="login" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Login </a>
						<div class="dropdown-menu" aria-labelledby="login">
							<form id="frm-logout" action="{{ route('logout') }}" method="POST">
							<button class="dropdown-item" type="submit" style="cursor: pointer">Odhlášení</button>
								{{ csrf_field() }}
							</form>
						</div>
					</li>
				@endif
			</ul>
		</div>
	</div>
</nav>