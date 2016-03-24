@extends('layouts.master')

@section('content')
	<h1>Literary Classics of the 19th Century</h1>

	@if (Session::has('message'))
	    <div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif

	@if ($novels->count())
	<table class="table table-striped table-bordered">
	  <thead><tr>
		<th>Title</th>
		<th>Author</th>
		<th>Year</th>
		<th style="text-align: right; padding-right: 12px;">Actions</th>
	  </tr></thead>
	  <tbody>
	  @foreach ($novels as $key => $value)
	   <tr><td>{{ $value->title }}</td>
		<td>{{ $value->author }}</td>
		<td>{{ $value->year }}</td>
		<td>
		  <ul class="actions">
			<li><a class="btn btn-small btn-success" href="{{ URL::to('novels/' . $value->id) }}">Show</a></li>
			<li><a class="btn btn-small btn-info" href="{{ URL::to('novels/' . $value->id . '/edit') }}">Edit</a></li>
            <li>{{ Form::open(array('method' => 'DELETE', 'route' => array('novels.destroy', $value->id))) }}                       
                {{ Form::submit('Delete', array('class' => 'btn btn-small btn-danger')) }}
                {{ Form::close() }}</li>
          </ul>
	   </td>
	   </tr>
	  @endforeach
	  </tbody>
	</table>
	@else
		No novels to display
	@endif
	<a class="btn btn-warning" href="{{ URL::to('novels/create') }}">Add Novel</a>

@stop
