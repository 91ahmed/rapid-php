@extends('layout/main')
@section('title', 'RapidMvc')

@section('content')
		<h1>Rapid Mvc</h1>
		<p>
		PHP mvc framework for easy and rapid development.
		</p>

		<ul>
			<li>
				<span style="color: #E15948;">@author</span> 
				<span style="color: #FFF;">{{ $rapid->author }}</span>
			</li>
			<li>
				<span style="color: #E15948;">@github</span> 
				<a href="{{ $rapid->link }}"><span style="color: #4CB7A6;">{{ $rapid->repo }}</span></a>
			</li>
		</ul>
@endsection