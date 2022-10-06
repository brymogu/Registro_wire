<?php

namespace App\Http\Livewire;

use App\Models\Negocios;
use Livewire\Component;

class InmuebleData extends Component
{
    public $name, $negocioglobal, $paso, $plan, $conjunto = false;
    protected $listeners = ['Propietario', 'Negocio', 'Conjunto'];


    public function render()
    {
        return view('livewire.inmueble-data');
    }

    public function Propietario($name)
    {
        $this->name = $name;
    }

    public function Negocio(Negocios $negocioglobal)
    {
        $this->negocioglobal = $negocioglobal;
        $this->paso = $this->negocioglobal->paso;
        $this->plan = $this->negocioglobal->plan;
    }

    public function Conjunto($conjunto)
    {
        $this->conjunto = $conjunto;
    }
}
