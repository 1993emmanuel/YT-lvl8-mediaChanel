<div>
    <h1>This is the header Component</h1>

    <strong><h3>{{$name}}</h3></strong>

    <h2>Fruits :</h2>

    <ul>
    	@foreach($frutas as $fruta)
    	<li>{{ $fruta }}</li>
    	@endforeach
    </ul>

</div>