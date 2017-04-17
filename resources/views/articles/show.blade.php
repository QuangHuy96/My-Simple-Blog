@extends('layouts.master')

@section('head.title')
	My simple blog
@stop

@section('body.content')
<div id="content" class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<a href="{{route('article.index')}}">
      			<span class="glyphicon glyphicon-chevron-left"></span>Back to home
    		</a>
			<h2>{{ $article->title }}</h2>
			<p>{{ $article->content }}</p>
		</div>
	</div>
</div>

@if(\Auth::check())
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<br>
			<a href="{{route('article.edit',$article->id)}}" class="btn btn-info">Edit</a>
			
			{{ Form::open([
					'route' => ['article.delete',$article->id],
					'method' => 'delete',
					'class' => 'form-horizontal',
					'style' => 'display:inline'
				])}}
			{{Form::submit('Delete',['class' => 'btn btn-danger'])}}
			{{ Form::close() }}
		</div>
	</div>
</div>
@endif
@stop