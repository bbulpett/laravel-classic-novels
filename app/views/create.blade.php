@extends('layouts.master')

@section('content')
<h1>Add a Novel</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'novels')) }}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('author', 'Author') }}
        {{ Form::text('author', Input::old('author'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('year', 'Year Published ') }}
        {{ Form::selectRange('year', 1800, 1899) }}
    </div>

    <div class="form-group">
        {{ Form::label('synopsis', 'Plot Summary') }}
        <br />
        {{ Form::textarea('synopsis', Input::old('synopsis'), array('class' => 'form-control'), ['size' => '100x10']) }}
    </div>
    {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}
@stop
