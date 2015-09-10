<nav class="navbar navbar-default">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">STEK</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				  @if (Sentry::check())
				  	<li {{ (Request::is('tempahan*') ? 'class=active' : '') }}><a href="{{ route('pengguna.tempahan') }}">Tempahan Baru</a></li>
				  @endif
				@if (Sentry::check() && Sentry::getUser()->hasAccess('admin'))
					<li {{ (Request::is('users*') ? 'class="active"' : '') }}><a href="{{ action('\\Sentinel\Controllers\UserController@index') }}">Users</a></li>
					<li {{ (Request::is('groups*') ? 'class="active"' : '') }}><a href="{{ action('\\Sentinel\Controllers\GroupController@index') }}">Groups</a></li>
				@endif
		       </ul>
			<form action="{{ route('carian.keputusan') }}" class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" name="query" placeholder="Cari Pengguna">
				</div>
				<button type="submit" class="btn btn-default">Cari</button>
			</form>
			<ul class="nav navbar-nav navbar-right">
				@if (Sentry::check())
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {{ Session::get('nama') }} <span class="caret"></span></a>
					<ul class="dropdown-menu">
					<li {{ (Request::is('profile') ? 'class="active"' : '') }}><a href="{{ route('sentinel.profile.show') }}">Profil</a>
				</li>
				<li>
					<a href="{{ route('sentinel.logout') }}">Logout</a>
				</li>
					</ul>
				</li>
				@else
				<li {{ (Request::is('logmasuk') ? 'class="active"' : '') }}><a href="{{ route('sentinel.login') }}">Log masuk</a></li>
				<li {{ (Request::is('users/create') ? 'class="active"' : '') }}><a href="{{ route('sentinel.register.form') }}">Daftar Pengguna</a></li>
				@endif
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>