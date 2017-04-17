<div class="form-group">
	{{ Form::label('title','Title',['class' => 'control-label']) }}
	{{ Form::text('title',null,['class' => 'form-control','id' => 'title', 'required' => 'true','placeholder' => 'Article Title']) }}
</div>

<div class="form-group">
	{{ Form::label('content','Content',['class' => 'control-label']) }}
	{{ Form::text('content',null,['class' => 'form-control','id' => 'title', 'required' => 'true','placeholder' => 'Article Title']) }}
</div>

<div class="form-group">
	{{ Form::submit($button_name,['class' => 'btn btn-primary']) }}
</div>