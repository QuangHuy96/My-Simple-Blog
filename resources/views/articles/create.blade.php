@extends ('layouts.master')

@section('head.title')
	Create new article
@stop

@section('body.content')
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<a href="{{route('article.index')}}">
      			<span class="glyphicon glyphicon-chevron-left"></span>Back to home
    			<br>
    		</a>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h1>Create new article</h1>
				<hr>
			</div>
		</div><!-- .row -->

		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				@if(count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
							@foreach($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

				{{ Form::open([
					'route' => ['article.store'],
					'method' => 'post',
					'class' => 'form-horizontal'
				])}}
				
				@include('articles._form',['button_name' => 'Create'])

				{{ Form::close() }}

			</div>
		</div><!-- .row --> 
	</div>
@stop