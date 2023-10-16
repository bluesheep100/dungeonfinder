<?php

namespace App\View\Components\Partials;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class SpellForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(): View|Closure|string
    {
        return view('components.partials.spell-form');
    }
}
