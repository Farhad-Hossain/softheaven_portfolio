<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class modal_form extends Component
{
    /**
     * Create a new component instance.
     */
    public $args;
    public function __construct($args)
    {
        $this->args = $args;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal_form');
    }
}
