<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <button type="button" wire:click="addTwoNumber(21,21)">Sum</button>

    <br><br><br><br><br><br>

    <form wire:submit.prevent="getSum">
    	Enter number 1 :<input type="text" name="num1" wire:model="num1" />
    	Enter number 2 :<input type="text" name="num2" wire:model="num2" />
    	<button type="submit">Sumbit</button>
    </form>
    Suma es : {{$sum}}

    <br>
    <textarea wire:keydown.enter="showMessage($event.target.value)"></textarea>
    <br>
    el mensaje es:<br>
    {{$message}}

</div>
