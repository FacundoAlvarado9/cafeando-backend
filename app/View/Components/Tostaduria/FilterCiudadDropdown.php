<?php

namespace App\View\Components\Tostaduria;

use Illuminate\View\Component;
use App\Models\Ciudad;

class FilterCiudadDropdown extends Component
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
    public function render()
    {
        return view('components.tostaduria.filter-ciudad-dropdown', [
            'ciudades' => Ciudad::all(),
            'currentCiudad' => Ciudad::firstWhere('nombre', request('presente-en'))
        ]);
    }
}
