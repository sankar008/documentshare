<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DashboardComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title = '';
    public $color = '';
    public $count = '';
    public $icon = '';
    public function __construct($title, $color, $count, $icon)
    {
        $this -> title = $title;
        $this -> color = $color;
        $this -> count = $count;
        $this -> icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard-component');
    }
}
