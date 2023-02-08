@extends('layout/main')
@section('title', 'RapidMvc')

@section('content')
		<h1>Rapid Mvc</h1>
		<p>
		Use an ordered or unordered list with linked list items to create a minimally styled breadcrumb. Use our utilities to add additional styles as desired.
		</p>

		<ul>
			<li>
				<span style="color: #E15948;">@author</span> 
				<span style="color: #FFF;">{{ $rapid->author }}</span>
			</li>
			<li>
				<span style="color: #E15948;">@link</span> 
				<a href="{{ $rapid->link }}"><span style="color: #4CB7A6;">{{ $rapid->link }}</span></a>
			</li>
		</ul>
@endsection