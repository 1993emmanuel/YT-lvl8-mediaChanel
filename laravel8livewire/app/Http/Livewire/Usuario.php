<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User as Users;
use Livewire\WithPagination;

class Usuario extends Component
{

	use WithPagination;
	// public $usuarios;
    public function render()
    {
    	// $this->usuarios = Users::all();
    	// $this->usuarios = Users::paginate(5);
    	$usuarios = Users::paginate(5);
        return view('livewire.usuario',['usuarios'=>$usuarios]);
    }
}
