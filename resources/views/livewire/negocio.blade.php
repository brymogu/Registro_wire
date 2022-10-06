<div class="animate__animated animate__fadeIn">
    <p class="titulo align-middle my-4 ">Datos del negocio</p>

    <div class="card shadow">
        <div class="card-body px-5 pt-5">
            <form wire:submit.prevent="save" id="negocio">
                <div class="row mb-3">
                    <div class="col-12 col-lg-4">
                        <x-native-select label="Propiedad" wire:model="propiedad">
                            <option selected></option>
                            @foreach($base_propiedad as $base_propiedad)
                            <option value="{{ $base_propiedad->id }}" />{{ $base_propiedad->nombre }}
                            </option>
                            @endforeach
                        </x-native-select>
                    </div>
                    <div class="col-12 col-lg-4">
                        <x-native-select label="Tipo de documento" wire:model="tipos_documento">
                            <option selected></option>
                            @foreach($base_documento as $base_documento)
                            <option value="{{ $base_documento->id }}" />{{ $base_documento->nombre }}
                            </option>
                            @endforeach
                        </x-native-select>
                    </div>
                    <div class="col-12 col-lg-4">
                        <x-input type="number" onkeydown="if(event.key==='.'){event.preventDefault();}"
                            oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');"
                            wire:model="numerodocumento" label="Número de documento" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <x-native-select label="Negocio a realizar" wire:model="tipos_negocio">
                            <option selected></option>
                            @foreach($base_negocio as $base_negocio)
                            <option value="{{ $base_negocio->id }}">{{ $base_negocio->nombre }}</option>
                            @endforeach
                        </x-native-select>
                    </div>
                    <div class="col-12 col-lg-4">
                        <x-native-select label="¿Es propiedad horizontal?" wire:model="horizontal">
                            <option selected></option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </x-native-select>
                    </div>
                    <div class="col-12 col-lg-4">
                        <x-input type="text" x-mask:dynamic="$money($input,',')" wire:model="valor" id="valor"
                            label="Valor tentativo" />

                        <small
                            class="animate__animated @if($tipos_negocio==2) animate__fadeInUp @else animate__fadeOutDown @endif ">Incluye
                            el valor de administración, si
                            aplica </small>
                    </div>
                </div>
                <div class="row py-3">
                    <p class="titulo my-3">Condiciones del inmueble</p>
                    <div class="col-12 col-lg-4">
                        <x-toggle md left-label="¿Tiene embargo?" wire:model="embargo" />
                    </div>
                    <div class="col-12 col-lg-4">
                        <x-toggle md left-label="¿Está habitado?" wire:model="habitado" />
                    </div>
                    @if($horizontal=="Si")
                    <div class="col-12 col-lg-4 animate__animated   animate__fadeInUp">
                        <x-toggle md left-label="¿Tiene reglamento de propiedad horizontal?" wire:model="reglamento" />
                    </div> @endif
                </div>
                @if($tipos_negocio==2)
                <div class="row animate__animated  animate__fadeInUp">
                    <div class="col-12 col-lg-4">
                        <x-toggle md left-label="¿Está amoblado?" wire:model="amoblado" />
                    </div>
                    <div class="col-12 col-lg-4">
                        <x-toggle md left-label="¿Arrendar menos de 1
                        año?" wire:model="menosano" />
                    </div>
                    <div class="col-12 col-lg-4">
                        <x-toggle md left-label="¿Tiene servicios públicos
                        independientes?" wire:model="servicios" />
                    </div>
                </div>
                @endif
                <div class="row mt-5">
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