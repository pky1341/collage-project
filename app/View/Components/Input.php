<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $type;
    public $name;
    public $placeholder;
    public $demo;
     // @return void
    
    public function __construct($type,$name,$placeholder ,$demo=0)
    {
        $this->type=$type;
        $this->name=$name;
        $this->placeholder=$placeholder;
        $this->$demo=$demo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
