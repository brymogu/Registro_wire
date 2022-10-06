<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Propietarios;
use App\Models\Negocios;

class PersonalData extends Component
{

    public $lastname;
    public $name;
    public $email;
    public $phone;
    public $full_number;
    public $tyc;

    public function render()
    {
        return view('livewire.personal-data');
    }

    public function save()
    {
        $correo = $this->email;
        $user = Propietarios::where('email', '=', $correo)->first();
        if ($user === null) {
            $propietario = new Propietarios();
            $propietario->name = $this->name;
            $propietario->lastname = $this->lastname;
            $propietario->email = $this->email;
            $propietario->phone = $this->phone;
            $propietario->full_number = $this->full_number;
            $propietario->save();

            $negocio = new Negocios();
            $negocio->propietario = $propietario->id;
            $negocio->paso = "Datos";
            $negocio->ip_address = request()->ip();
            $negocio->user_agent = request()->server('HTTP_USER_AGENT');
            $negocio->save();

            $this->emit('PropietarioHeader', $this->name);
            $this->emit('SetNegocio', $negocio->id);
        } else {
            $user->name = $this->name;
            $user->lastname = $this->lastname;
            $user->phone = $this->phone;
            $user->full_number = $this->full_number;
            $user->save();

            $negocio = new Negocios();
            $negocio->propietario = $user->id;
            $negocio->paso = "Datos";
            $negocio->ip_address = request()->ip();
            $negocio->user_agent = request()->server('HTTP_USER_AGENT');
            $negocio->save();
            $this->emit('PropietarioHeader', $this->name);
            $this->emit('SetNegocio', $negocio->id);
            $this->emit('Paso', $negocio->paso);
        }
        $this->emit('inmuebledata', 1);
    }
}
