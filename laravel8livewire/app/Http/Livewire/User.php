<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User as Users;

class User extends Component
{

	public $users;

    public function render()
    {
    	$this->users = Users::all();

        return <<<'blade'
            <div class="container">
            	<div class="row">
            		<div class="col-md-12">
                		{{-- Close your eyes. Count to one. That is how long forever feels. --}}
                		<h1 class="text-center lead">This is User component</h1>
                		<div class="card">
                			
                		</div>
            		</div>
            	</div>
                <ul>
                @foreach($users as $user)
                	<li>{{ $user->name }}</li>
                @endforeach
                </ul>
            </div>
        blade;
    }
}
