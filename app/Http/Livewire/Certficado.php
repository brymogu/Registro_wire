<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use App\Models\Propiedades;
use Livewire\Component;

class Certficado extends Component
{
    use WithFileUploads;

    public $negocioglobal, $certificado, $url, $tipo_pptario;


    public function mount()
    {
        $this->tipo_pptario = $this->negocioglobal->tipo_propietario;
    }


    public function render()
    {
        return view('livewire.certficado');
    }

    public function save()
    {
        $this->url = $this->certificado->store('certificados/' . $this->negocioglobal->id);
        $this->propiedad = Propiedades::find($this->negocioglobal->inmueble);
        $this->propiedad->certificado = $this->url;
        $this->propiedad->save();

        $this->negocioglobal->paso = "Certificado";
        $this->negocioglobal->save();
        $this->emit('inmuebledata', 2);
    }
}
