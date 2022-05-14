<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;
use App\Models\Ciudad;

class CiudadDropdown extends Component
{
    public $sucursal;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($sucursal = NULL)
    {
        $this->sucursal = $sucursal;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.ciudad-dropdown', [
            'ciudades' => Ciudad::all()
        ]);
    }
}
