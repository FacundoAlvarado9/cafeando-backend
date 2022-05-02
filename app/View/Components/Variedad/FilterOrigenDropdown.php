<?php

namespace App\View\Components\Variedad;

use Illuminate\View\Component;
use App\Models\Origen;

class FilterOrigenDropdown extends Component
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
        return view('components.variedad.filter-origen-dropdown', [
            'origenes' => Origen::all(),
            'currentOrigen' => Origen::firstWhere('nombre', request('origen'))
        ]);
    }
}
