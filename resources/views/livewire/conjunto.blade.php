<div class="animate__animated animate__fadeIn">
    <p class="titulo align-middle my-4 ">Características conjunto cerrado o edificio</p>
    <div class="card mb-3 shadow">
        <div class="card-body p-5">
            <form wire:submit.prevent="save" id="conjunto">
                <div class="row mb-3">
                    <div class="col-12 col-lg-4">
                        <x-input type="text" wire:model="conjunto" label="Nombre del conjunto o edificio" />
                    </div>
                    <div class="col-12 col-lg-4">
                        <x-native-select label="Seguridad" wire:model="seguridad">
                            <option selected></option>
                            @foreach($tipos_seguridad as $tipo_seguridad)
                            <option value="{{ $tipo_seguridad->id }}">{{ $tipo_seguridad->nombre }}</option>
                            @endforeach
                        </x-native-select>
                    </div>
                    @if($seguridad == 1 || $seguridad == 3)
                    <div class="col-12 col-lg-4 animate__animated animate__fadeInUp">
                        <x-native-select label="Vigilancia" wire:model="vigilancia">
                            <option selected></option>
                            @foreach($tipos_vigilancia as $tipo_vigilancia)
                            <option value="{{ $tipo_vigilancia->id }}">{{ $tipo_vigilancia->nombre }}</option>
                            @endforeach
                        </x-native-select>
                    </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <x-native-select label="Administración" wire:model="administracion">
                            <option selected></option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </x-native-select>
                    </div>
                    @if($administracion =="Si")
                    <div class="col-12 col-lg-4 animate__animated animate__fadeInUp">
                        <x-input type="text" x-mask:dynamic="$money($input,',')" wire:model="valor_cuota"
                            label="Valor cuota" />
                    </div>
                    @endif
                </div>
                <div class="row mt-5 mb-3">
                    <div class="col-12 col-lg">
                        <x-toggle md left-label="Parqueadero de visitantes" wire:model="pq_visitantes" />
                    </div>
                    <div class="col-12 col-lg">
                        <x-toggle md left-label="Salón social" wire:model="salon_social" />
                    </div>
                    <div class="col-12 col-lg">
                        <x-toggle md left-label="BBQ" wire:model="bbq" />
                    </div>
                    <div class="col-12 col-lg">
                        <x-toggle md left-label="Parque infantil" wire:model="pq_infantil" />
                    </div>
                    <div class="col-12 col-lg">
                        <x-toggle md left-label="Gimnasio" wire:model="gimnasio" />
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-12 col-lg">
                        <x-toggle md left-label="Cancha de squash" wire:model="squash" />
                    </div>
                    <div class="col-12 col-lg">
                        <x-toggle md left-label="Cancha de tenis" wire:model="tenis" />
                    </div>
                    <div class="col-12 col-lg">
                        <x-toggle md left-label="Cancha múltiple" wire:model="multiple" />
                    </div>
                    <div class="col-12 col-lg">
                        <x-toggle md left-label="Piscina" wire:model="piscina" />
                    </div>
                    <div class="col-12 col-lg"></div>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="col-6 col-lg-10">
                        </div>
                        <div class="col-6 col-lg-2 text-end pe-0 me-0">
                            <button type="submit" class="boton">
                                Siguiente
                                <i class="lni lni-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>