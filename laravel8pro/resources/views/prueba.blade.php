<h1>Test blade</h1>

@include('headers')

@php
	$name = "emmanuel";

	$frutas = array('manzana','durazno','tomamte','cereal','pera','melon','limon');
@endphp


<h2>{{ $name }}</h2>

<ul>
	@foreach($frutas as $fruta)
	<li>{{ $fruta }}</li>
	@endforeach
</ul>

<hr>

@for($i=0; $i<=10; $i++)
	<span>{{$i}}</span>
@endfor