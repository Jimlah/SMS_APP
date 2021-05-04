<?php

namespace App\View\Components;

use Illuminate\View\Component;

class action extends Component
{
    public $viewOne;
    public $edit;
    public $delete;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($viewOne, $edit, $delete)
    {
        $this->viewOne = $viewOne;
        $this->edit = $edit;
        $this->delete = $delete;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.action');
    }
}
