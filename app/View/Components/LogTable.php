<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LogTable extends Component
{
    public $rent_logs;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($rent_logs)
    {
        $this->rent_logs = $rent_logs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.log-table');
    }
}
