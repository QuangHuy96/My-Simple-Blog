@extends('layouts.master')

@section('head.title')
	My simple blog
@stop

@section('body.content')
<div id="content" class="container">
	@foreach($articles as $a)
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h2>{{ $a->title }}</h2>
			<p>{{ $a->content }}</p>
			<p><a href="{{route('article.show',$a->id)}}">Read more</a></p>
		</div>
	</div>
	@endforeach

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			{{ $articles->links() }}
		</div>
	</div>
</div>
@stop