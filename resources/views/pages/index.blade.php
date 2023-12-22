@extends('layouts.main')

@section('title', 'Homepage')

@section('content')
	<h1>{{ $nome }}</h1>
	@foreach ($array as $value)
		<p>Index: {{ $loop->index }} | Value: {{ $value }}</p>
	@endforeach
@endsection
