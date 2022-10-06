<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Propiedades;
use App\Models\Fotos as Fotografias;

class Fotos extends Component
{
    use WithFileUploads;

    public $negocioglobal, $photos = [], $count = 0, $url;

    protected $rules = [
        'photos.*' => 'image'
    ];

    public function render()
    {
        return view('livewire.fotos');
    }

    public function updatedPhotos()
    {
        $this->validate();
    }

    public function removeImg($index)
    {
        array_splice($this->photos, $index, 1);
    }

    public function jump()
    {
        $this->negocioglobal->paso = "Fotos";
        $this->negocioglobal->fotos = false;
        $this->negocioglobal->save();
        $this->emit('Negocio', $this->negocioglobal);
    }

    public function save()
    {
        $this->validate();
        $this->propiedad = Propiedades::find($this->negocioglobal->inmueble);
        foreach ($this->photos as $photo) {
            $this->url = $photo->store('photos/' . $this->negocioglobal->id);
            $foto = new Fotografias();
            $foto->url = $this->url;
            $foto->propiedad = $this->propiedad->id;
            $foto->save();
        }
        $this->negocioglobal->paso = "Fotos";
        $this->negocioglobal->fotos = true;
        $this->negocioglobal->save();
        $this->emit('Negocio', $this->negocioglobal);
    }
}
