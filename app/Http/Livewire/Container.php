<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Negocios;
use function Termwind\render;

class Container extends Component
{
    public $inmuebledata = 3;
    public $name;
    public $negocio;

    protected $listeners = ['inmuebledata', 'PropietarioHeader', 'SetNegocio'];

    public function render()
    {
        return view('livewire.container')
            ->layout('layouts.container');
    }

    public function inmuebledata($val)
    {
        $this->inmuebledata = $val;
    }

    public function PropietarioHeader($name)
    {
        $this->emit('Propietario', $name);
    }

    public function SetNegocio(Negocios $negocio)
    {
        $this->emit('Negocio', $negocio);
    }
}
