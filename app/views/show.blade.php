@extends('layouts.master')

@section('content')
	<a class="btn btn-small btn-primary" href="{{ URL::to('..') }}" style="margin-top: 12px;">Back to Index</a>
	<h1 style="text-align: center;">{{ $novel->title }}</h1>
	<h2 style="text-align: center;">By {{ $novel->author }}</h1>
	<p style="text-align: center;">Published in {{ $novel->year }}</p>
	<h3>Plot Summary</h3>
	<div id="plotSummary">
		<p><?php  echo nl2br($novel->synopsis); ?></p>
	</div>
	<footer><p><em>Information courtesy of Wikipedia</em></p></footer>
@stop