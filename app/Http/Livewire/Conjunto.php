<?php

namespace App\Http\Livewire;

use App\Models\Propiedades;
use App\Models\Tipos_seguridad;
use App\Models\Tipos_vigilancia;


use Livewire\Component;

class Conjunto extends Component
{
    public $negocioglobal, $conjunto, $seguridad, $vigilancia, $administracion, $valor_cuota, $pq_visitantes, $salon_social, $bbq, $pq_infantil, $gimnasio, $squash, $tenis, $multiple, $piscina;
    public $tipos_seguridad, $tipos_vigilancia;

    protected $rules = [
        'conjunto' => 'required',
        'seguridad' => 'required',
        'vigilancia' => 'required_if:seguridad,==,1',
        'administracion' => 'required',
        'valor_cuota' => 'nullable|required_if:administracion,==,Si|min:6',
    ];

    protected $messages = [
        '*.min' => 'Este monto no es válido',
        '*.required_if' => 'Este campo es obligatorio',
    ];

    public function mount()
    {
        $this->propiedad = Propiedades::find($this->negocioglobal->inmueble);
        $this->tipos_seguridad = Tipos_seguridad::all();
        $this->tipos_vigilancia = Tipos_vigilancia::all();
        
    }

    public function render()
    {
        return view('livewire.conjunto');
    }

    public function updated($propertyname)
    {
        $this->validateOnly($propertyname);
    }

    public function save()
    {
        $this->validate();
        $this->propiedad->nombre_c_e = $this->conjunto;
        $this->propiedad->tipo_seguridad = $this->seguridad;
        $this->propiedad->tipo_vigilancia = $this->vigilancia;
        $this->propiedad->administracion = $this->administracion;
        $this->propiedad->valor_admon = $this->valor_cuota;
        $this->propiedad->pq_visitantes = $this->pq_visitantes;
        $this->propiedad->s_social = $this->salon_social;
        $this->propiedad->bbq = $this->bbq;
        $this->propiedad->p_infantil = $this->pq_infantil;
        $this->propiedad->gimnasio = $this->gimnasio;
        $this->propiedad->c_squash = $this->squash;
        $this->propiedad->c_tenis = $this->tenis;
        $this->propiedad->c_multiple = $this->multiple;
        $this->propiedad->piscina = $this->piscina;

        $this->propiedad->save();

        $this->negocioglobal->paso = "Conjunto";
        $this->negocioglobal->save();
        $this->emit('Negocio', $this->negocioglobal);
    }

    public function updatedSeguridad()
    {
        if ($this->seguridad != 1 && $this->seguridad != 3 ) {
            $this->vigilancia = null;
        }
    }

    public function updatedAdministracion()
    {
        if ($this->administracion == "No") {
            $this->valor_cuota = null;
        }
    }
}
