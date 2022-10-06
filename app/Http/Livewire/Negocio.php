<?php

namespace App\Http\Livewire;

use App\Models\Negocios;
use App\Models\Propietarios;
use App\Models\Propiedades;
use App\Models\Tipos_documento;
use App\Models\Tipos_negocios;
use App\Models\TiposPropietario;
use WireUi\Traits\Actions;

use Livewire\Component;

class Negocio extends Component
{
    public $propiedad, $tipos_documento, $numerodocumento, $tipos_negocio, $horizontal, $valor, $negocioglobal;
    public $rural, $habitado,  $amoblado, $vacacionales, $menosano, $embargo, $servicios = true, $reglamento = true;
    public $admon = false;
    use Actions;

    protected $rules = [
        'propiedad' => 'required|prohibitedIf:propiedad,==,3|prohibitedIf:propiedad,==,4',
        'tipos_documento' => 'required',
        'tipos_negocio' => 'required',
        'horizontal' => 'required',
        'numerodocumento' => 'required|numeric|min:1000000',
        'valor' => 'required|min:7',
    ];
    protected $messages = [
        'propiedad.prohibited_if' => 'La plataforma no es para este uso',
        'valor.min' => 'Este monto no es válido',
        'numerodocumento.min' => 'Digita un valor válido'
    ];

    public function mount()
    {
        $this->base_documento = Tipos_documento::all();
        $this->base_negocio = Tipos_negocios::all();
        $this->base_propiedad = TiposPropietario::all();
    }


    public function render()
    {
        return view('livewire.negocio');
    }

    public function save()
    {
        $this->validate();

        $propietario = Propietarios::find($this->negocioglobal->propietario);
        $propietario->tipo_doc = $this->tipos_documento;
        $propietario->doc_number = $this->numerodocumento;
        $propietario->save();

        $inmueble = new Propiedades();
        $inmueble->horizontal = $this->horizontal;
        $inmueble->save();

        $this->negocioglobal->inmueble = $inmueble->id;
        $this->negocioglobal->tipo_propietario = $this->propiedad;
        $this->negocioglobal->tipo_negocio = $this->tipos_negocio;
        $this->negocioglobal->paso = "Negocio";
        $this->negocioglobal->valor = $this->valor;
        $this->negocioglobal->save();
        $this->emit('Negocio', $this->negocioglobal);
    }



    public function updated($propertyname)
    {
        $this->validateOnly($propertyname);
        if ($propertyname == "embargo" || $propertyname == "rural" || $propertyname == "habitado" ||  $propertyname == "amoblado" || $propertyname == "vacacionales" || $propertyname == "menosano") {
            $this->emit('alert', '¡¡¡ Lo sentimos !!!', 'No podemos comercializar el inmueble en esta condición');
            $this->rural = false;
            $this->habitado = false;
            $this->amoblado = false;
            $this->vacacionales = false;
            $this->menosano = false;
            $this->embargo = false;
        } elseif ($propertyname == "reglamento" || $propertyname == "servicios") {
            $this->emit('alert', '¡¡¡ Lo sentimos !!!', 'Esto es indispensable para poderlo comercializar');
            $this->reglamento = true;
            $this->servicios = true;
        }
    }

    public function updatedHorizontal()
    {
        if ($this->horizontal == "Si") {
            $this->emit('Conjunto', true);
        } else {
            $this->emit('Conjunto', false);
        }
    }
}
