<div>


    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    Name : <br>
    <input type="text" wire:model.debounce.500ms="name" /><br>

    Message : <br>
    <textarea wire:model="message"></textarea><br>

    marital status: <br>
    single<input type="radio" value="single" wire:model="marital_status" /> <br>
    marrie<input type="radio" value="marrie" wire:model="marital_status" /> <br>

    favorite color : <br>

    red <input type="checkbox" value="red" wire:model="colors">
    green <input type="checkbox" value="green" wire:model="colors">
    blue <input type="checkbox" value="blue" wire:model="colors">
    yellow <input type="checkbox" value="yellow" wire:model="colors">

    <br>
    <br>

    favorite fruit<br>
    <select wire:model="fruit">
    	<option value="">Select fruit</option>
    	<option value="apple">apple</option>
    	<option value="avocado">avocado</option>
    	<option value="watermelon">watermelon</option>
    	<option value="banana">banana</option>
    	<option value="green apple">green apple</option>
    </select>

    <hr>

    name :{{$name}}<br>
    message : {{$message}}<br>
    marital status : {{$marital_status}}<br>
    favorite color :
    <ul>
	    @foreach($colors as $color)
	    	<li>{{$color}}</li>
	    @endforeach
    </ul>
    fruit : {{$fruit}}<br>

</div>
