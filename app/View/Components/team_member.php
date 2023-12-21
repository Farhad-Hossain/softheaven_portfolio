<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class team_member extends Component
{
    /**
     * Create a new component instance.
     */
    public $member;
    public $index;
    public function __construct($member, $index)
    {
        $this->member = $member;
        $this->index = $index;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.team_member');
    }
}
