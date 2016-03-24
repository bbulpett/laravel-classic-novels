@extends('layouts.master')

@section('content')
	{{ HTML::ul($errors->all()) }}

	{{ Form::model($novel, array('route' => array('novels.update', $novel->id), 'method' => 'PUT')) }}

	    <div class="form-group">
	        {{ Form::label('title', 'Title') }}
	        {{ Form::text('title', null, array('class' => 'form-control')) }}
	    </div>

	    <div class="form-group">
	        {{ Form::label('author', 'Author') }}
	        {{ Form::text('author', null, array('class' => 'form-control')) }}
	    </div>

	    <div class="form-group">
	        {{ Form::label('year', 'Year Published') }}
        	{{ Form::selectRange('year', 1800, 1899) }}
	    </div>

	    <div class="form-group">
        	{{ Form::label('synopsis', 'Plot Summary') }}
        	<br />
        	{{ Form::textarea('synopsis', Input::old('synopsis'), array('class' => 'form-control'), ['size' => '100x10']) }}
    	</div>
	    {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop
