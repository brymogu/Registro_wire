<?php

namespace App\Http\Livewire;

use App\Models\Tipos_inmueble;
use App\Models\Estratos;
use App\Models\Ascensor;
use App\Models\Estados_inmueble;
use App\Models\Ciudades;
use App\Models\Remodelados;
use App\Models\Niveles;
use App\Models\Mats_piso_habitacion;
use App\Models\Mats_piso_cocina;
use App\Models\Mats_piso_bano;
use App\Models\Mats_piso_zsocial;
use App\Models\Mb_cocina;
use App\Models\Tipos_estufa;
use App\Models\Tipos_horno;
use App\Models\Calentadores;
use App\Models\Vista;
use App\Models\tipo_garajes;
use App\Models\TiposCortina;

use App\Models\Propiedades;
use Livewire\Component;
use Illuminate\Validation\Rule;

class Detalles extends Component
{
    public $negocioglobal, $horizontal, $propiedad, $tipo_inmueble, $estado, $tiempo, $val_tiempo = false, $remodelado, $tuberia, $piso, $val_piso = false, $ascensores, $estrato,
        $ciudad, $direccion, $detallesdir,
        $a_contruida, $a_privada, $aterreno,
        $n_niveles, $n_habitaciones, $n_banos,
        $mat_habitacion, $mat_banos, $mat_cocina, $mat_salacomedor,
        $mb_cocina, $tipo_estufa, $tipo_horno, $tipo_calentador, $tipo_vista, $lavanderia, $tipo_cortinas,
        $balcon, $terraza, $closet, $bano_social, $estudio, $deposito, $patio, $cortina, $zonas_verdes, $jardin_interior,
        $a_balcon, $a_terraza,
        $garaje, $n_garajes, $tipo_garaje, $garaje_cubierto;

    protected $rules = [
        'tipo_inmueble' => 'required',
        'estrato' => 'required',
        'estado' => 'required',
        'horizontal' => 'required',
        'garaje' => 'required',
        'direccion' => 'required',
        'detallesdir' => 'required',
        'tipo_vista' => 'required',
        'n_habitaciones' => 'required|numeric|min:1|max:9',
        'mat_habitacion' => 'required',
        'n_banos' => 'required|numeric|min:1|max:9',
        'mat_banos' => 'required',
        'mb_cocina' => 'required',
        'mat_cocina' => 'required',
        'tipo_estufa' => 'required',
        'tipo_horno' => 'required',
        'mat_salacomedor' => 'required',
        'tipo_calentador' => 'required',
        'n_niveles' => 'required',
        'a_contruida' => 'required|numeric|min:11',
        'a_privada' => 'required|numeric|min:11',

        'aterreno' => 'nullable|required_if:tipo_inmueble,==,1|numeric|min:11',
        'a_balcon' => 'nullable|required_if:balcon,==,true|numeric|min:1',
        'a_terraza' => 'nullable|required_if:terraza,==,true|numeric|min:1',
        'piso' => 'nullable|required_if:tipo_inmueble,==,2|numeric|min:1',
        'tiempo' => 'nullable|required_if:estado,==,4|required_if:estado,==,5|numeric|min:1',
        'n_garajes' => 'nullable|required_if:garaje,==,Privado|numeric|min:1',

        'tipo_cortinas' => 'required_if:cortina,==,true',
        'tipo_garaje' => 'required_if:garaje,==,Privado',
        'garaje_cubierto' => 'required_if:garaje,==,Privado',
        'tuberia' => 'required_if:remodelado,==,1',

        'ascensores' => 'required_if:val_piso,==,true',
        'remodelado' => 'required_if:val_tiempo,==,true',

    ];
    protected $messages = [
        '*.min' => 'Este monto no es válido',
        '*.max' => 'Valor inválido',
        '*.required_if' => 'Este campo es obligatorio',
    ];


    public function mount()
    {
        $this->propiedad = Propiedades::find($this->negocioglobal->inmueble);
        $this->horizontal = $this->propiedad->horizontal;
        $this->base_tp_inmueble = Tipos_inmueble::all();
        $this->base_estados = Estados_inmueble::all();
        $this->base_garajes = tipo_garajes::all();
        $this->base_remodelado = Remodelados::all();
        $this->base_estratos = Estratos::all();
        $this->base_ciudades = Ciudades::all();
        $this->base_vistas = Vista::all();
        $this->base_ascensores = Ascensor::all();
        $this->base_niveles = Niveles::all();
        $this->base_mats_habitacion = Mats_piso_habitacion::all();
        $this->base_mats_cocina = Mats_piso_cocina::all();
        $this->base_mats_bano = Mats_piso_bano::all();
        $this->base_mats_sala = Mats_piso_zsocial::all();
        $this->base_mobs_cocina = Mb_cocina::all();
        $this->base_estufas = Tipos_estufa::all();
        $this->base_hornos = Tipos_horno::all();
        $this->base_calentadores = Calentadores::all();
        $this->base_mat_habitaciones = Mats_piso_habitacion::all();
        $this->base_tps_cortina = TiposCortina::all();
    }

    public function render()
    {
        return view('livewire.detalles');
    }

    public function updated($propertyname)
    {
        $this->validateOnly($propertyname);
    }

    public function save()
    {
        $this->validate();

        $this->propiedad->tipo_inmueble = $this->tipo_inmueble;
        $this->propiedad->estrato = $this->estrato;
        $this->propiedad->estado = $this->estado;
        $this->propiedad->tiene_garajes = $this->garaje;
        $this->propiedad->ciudad = 1;
        $this->propiedad->direccion = $this->direccion;
        $this->propiedad->direccion_comp = $this->detallesdir;
        $this->propiedad->tipo_vista = $this->tipo_vista;
        $this->propiedad->num_habitaciones = $this->n_habitaciones;
        $this->propiedad->mat_habitacion = $this->mat_habitacion;
        $this->propiedad->num_banos = $this->n_banos;
        $this->propiedad->mat_piso_bano = $this->mat_banos;
        $this->propiedad->mob_cocina = $this->mb_cocina;
        $this->propiedad->mat_piso_cocina = $this->mat_cocina;
        $this->propiedad->tipo_estufa = $this->tipo_estufa;
        $this->propiedad->tipo_horno = $this->tipo_horno;
        $this->propiedad->mat_salacomedor = $this->mat_salacomedor;
        $this->propiedad->tipo_calentador = $this->tipo_calentador;
        $this->propiedad->nivel = $this->n_niveles;
        $this->propiedad->balcon = $this->balcon;
        $this->propiedad->terraza = $this->terraza;
        $this->propiedad->closet = $this->closet;
        $this->propiedad->bano_social = $this->bano_social;
        $this->propiedad->estudio = $this->estudio;
        $this->propiedad->deposito = $this->deposito;
        $this->propiedad->zonas_verdes = $this->zonas_verdes;
        $this->propiedad->entrega_cortinas = $this->cortina;
        $this->propiedad->patio = $this->patio;
        $this->propiedad->jardin_interior = $this->jardin_interior;
        $this->propiedad->a_construida = $this->a_contruida;
        $this->propiedad->a_privada = $this->a_privada;
        $this->propiedad->a_terreno = $this->aterreno;
        $this->propiedad->area_balcon = $this->a_balcon;
        $this->propiedad->area_terraza = $this->a_terraza;
        $this->propiedad->piso = $this->piso;
        $this->propiedad->ascensor = $this->ascensores;
        $this->propiedad->tipo_cortina = $this->tipo_cortinas;
        $this->propiedad->tiempo_inm = $this->tiempo;
        $this->propiedad->remodelado = $this->remodelado;
        $this->propiedad->tuberia = $this->tuberia;
        $this->propiedad->no_garajes = $this->n_garajes;
        $this->propiedad->tipo_garajes = $this->tipo_garaje;
        $this->propiedad->gje_cubierto = $this->garaje_cubierto;
        $this->propiedad->save();

        $this->negocioglobal->paso = "Detalles";
        $this->negocioglobal->save();
        $this->emit('Negocio', $this->negocioglobal);
    }

    public function updatedTipoInmueble()
    {
        if ($this->tipo_inmueble == 1) {
            $this->piso = null;
        } else {
            $this->patio = null;
            $this->jardin_interior = null;
            $this->aterreno = null;
        }
    }

    public function updatedPiso()
    {
        if ($this->piso < 2) {
            $this->ascensores = null;
            $this->val_piso = false;
        } else {
            $this->val_piso = true;
        }
    }

    public function updatedEstado()
    {
        if ($this->estado < 4) {
            $this->tiempo = null;
            $this->remodelado = null;
            $this->tuberia = null;
        }
    }

    public function updatedTiempo()
    {
        if ($this->tiempo < 5) {
            $this->remodelado = null;
            $this->tuberia = null;
            $this->val_tiempo = false;
        }
        if ($this->tiempo >= 5 && $this->estado == 4) {
            $this->val_tiempo = true;
        } else {
            $this->val_tiempo = false;
        }
    }

    public function updatedRemodelado()
    {
        if ($this->remodelado != 1) {
            $this->tuberia = null;
        }
    }

    public function updatedBalcon()
    {
        if (!$this->balcon) {
            $this->a_balcon = null;
        }
    }

    public function updatedTerraza()
    {
        if (!$this->terraza) {
            $this->a_terraza = null;
        }
    }

    public function updatedCortina(){
        if (!$this->cortina) {
            $this->tipo_cortinas = null;
        }
    }
    public function updatedGaraje()
    {
        if ($this->garaje != "Privado") {
            $this->n_garajes = null;
            $this->tipo_garaje = null;
            $this->garaje_cubierto = null;
        }
    }
}
