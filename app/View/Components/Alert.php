<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Blade;
use Illuminate\View\Component;

class Alert extends Component
{


 /**   public function boot()
*{
 *   Blade::component('package-alert', Alert::class);
*}*/
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
