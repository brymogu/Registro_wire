<?php

namespace App\Http\Livewire;

use App\Models\Planes as BasePlanes;
use Livewire\Component;

class Planes extends Component
{
    public $negocioglobal, $planes, $base_precio, $tipo_negocio;
    public $cambio, $plan, $nombre, $porcentaje, $servicios, $subtotal, $iva, $cpm, $total;

    protected $rules = [
        'plan' => 'required',
        'base_precio' => 'required|min:7',
    ];
    protected $messages = [
        'base_precio.min' => 'Este monto no es válido',
    ];

    public function mount()
    {
        $this->base_planes = BasePlanes::all();
        $this->tipo_negocio = $this->negocioglobal->tipo_negocio;
        $this->base_precio = (int)str_replace(".", "",  $this->negocioglobal->valor);
    }

    public function render()
    {
        return view('livewire.planes');
    }

    public function updated($propertyname)
    {
        $this->validateOnly($propertyname);
    }

    public function save()
    {
        $this->validate();
        $this->negocioglobal->plan = $this->plan;
        $this->negocioglobal->valor = $this->base_precio;
        $this->negocioglobal->paso = "Plan";
        $this->negocioglobal->save();
        $this->emit('Negocio', $this->negocioglobal);
    }

    public function updatedPlan()
    {
        if ($this->plan != null) {
            $this->calculadora();
        }
    }
    public function updatedBasePrecio()
    {

        if ($this->base_precio != null) {
            $this->base_precio = (int)str_replace(".", "",  $this->base_precio);
            $this->calculadora();
        }
    }

    public function calculadora()
    {
        if ($this->tipo_negocio == 1) {
            switch ($this->plan) {
                case 1:
                    $this->nombre = "Básico";
                    $this->porcentaje = 2;
                    $this->servicios = null;
                    $this->subtotal = $this->base_precio * ($this->porcentaje / 100);
                    $this->iva = $this->subtotal * 0.19;
                    $this->cpm = null;
                    $this->total = $this->subtotal + $this->iva;
                    break;
                case 2:
                    $this->nombre = "Estándar";
                    $this->porcentaje = 3;
                    $this->servicios = null;
                    $this->subtotal = $this->base_precio * ($this->porcentaje / 100);
                    $this->iva = ($this->subtotal / 2) * 0.19;
                    $this->cpm = null;
                    $this->total = $this->subtotal + ($this->iva * 2);
                    break;
                case 3:
                    $this->nombre = "Premium";
                    $this->porcentaje = 4;
                    $this->servicios = null;
                    $this->subtotal = $this->base_precio * ($this->porcentaje / 100);
                    $this->iva = ($this->subtotal / 2) * 0.19;
                    $this->cpm = null;
                    $this->total = $this->subtotal + ($this->iva * 2);
                    break;
            }
        } elseif ($this->tipo_negocio == 2) {
            switch ($this->plan) {
                case 1:
                    $this->nombre = "Básico";
                    $this->porcentaje = 8;
                    $this->servicios = $this->base_precio * 0.0584;
                    $this->subtotal = $this->base_precio * ($this->porcentaje / 100);
                    $this->iva = $this->subtotal * 0.19;
                    $this->cpm = $this->subtotal * 0.004;
                    $this->total = $this->subtotal + $this->iva + $this->cpm;
                    break;
                case 2:
                    $this->nombre = "Estándar";
                    $this->porcentaje = 10;
                    $this->servicios = $this->base_precio * 0.0784;
                    $this->subtotal = $this->base_precio * ($this->porcentaje / 100);
                    $this->iva = $this->subtotal * 0.19;
                    $this->cpm = $this->subtotal * 0.004;
                    $this->total = $this->subtotal + $this->iva + $this->cpm;
                    break;
                case 3:
                    $this->nombre = "Premium";
                    $this->porcentaje = 12;
                    $this->servicios = $this->base_precio * 0.0984;
                    $this->subtotal = $this->base_precio * ($this->porcentaje / 100);
                    $this->iva = $this->subtotal * 0.19;
                    $this->cpm = $this->subtotal * 0.004;
                    $this->total = $this->subtotal + $this->iva + $this->cpm;
                    break;
            }
        }
    }
}
