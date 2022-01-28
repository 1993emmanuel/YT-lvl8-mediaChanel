<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    public $name;
    public $frutas;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $frutas)
    {
        //
        $this->name = $name;
        $this->frutas = $frutas;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.header');
    }
}
