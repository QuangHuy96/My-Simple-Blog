<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{route('article.index')}}">Simple Blog</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			@if(\Auth::check())
			<ul class="nav navbar-nav">
				<li><a href="{{route('article.create')}}">New article</a></li>
			</ul>
			@endif
			
			<div class="nav navbar-nav navbar-right">
				@if(\Auth::guest())
					<li><a href="{{ url('/register')}}">Register</a></li>
					<li><a href="{{ url('/login')}}">Login</a></li>
				@else
					<li><a href="#">{{ \Auth::user()->name }}</a></li>
					<li><a href="{{ url('/logout') }}">Logout</a></li>
				@endif
			</div>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>