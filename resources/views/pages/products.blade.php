@extends('../layouts/main')
@section('title', 'Produtos')

@section('content')

<h2>Página de produtos</h2>

@if ($search)
	<p>O usuário está buscando por: {{ $search }}</p>
@endif
@endsection