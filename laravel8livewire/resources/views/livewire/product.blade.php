<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day --}}
    <h1>This is product blade php</h1>

    Title : <input type="text" wire:model="title" />
    <br>
    Name : <input type="text" wire:model="name" />
    <br>

    <h3>{{ $title }}</h3>

    <h3>{{ $name }}</h3>

    <hr>
    <h1>lifecycle of wirelive</h1>

    @foreach($infos as $info)
    	<h4>{{ $info }}</h4>
    @endforeach

</div>
