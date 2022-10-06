<div class="animate__animated animate__fadeIn">
    <p class="titulo align-middle my-4 ">Detalles del inmueble</p>
    <div class="card mb-3 shadow">
        <div class="card-body p-5">
            <form wire:submit.prevent="save" id="detalles">
                <div class="row mb-3">
                    <div class="col-12 col-lg-3">
                        <x-native-select label="Tipo de inmueble" wire:model="tipo_inmueble">
                            <option selected></option>
                            @foreach($base_tp_inmueble as $base_tipoinmb)
                            <option value="{{ $base_tipoinmb->id }}">{{ $base_tipoinmb->nombre }}</option>
                            @endforeach
                        </x-native-select>
                    </div>
                    <div class="col-12 col-lg-3">
                        <x-native-select label="Estrato" wire:model="estrato">
                            <option selected></option>
                            @foreach($base_estratos as $base_estrato)
                            <option value="{{ $base_estrato->id }}">{{ $base_estrato->nombre }}</option>
                            @endforeach
                        </x-native-select>
                    </div>
                    <div class="col-12 col-lg-3">
                        <x-native-select label="Estado" wire:model="estado">
                            <option selected></option>
                            @foreach($base_estados as $base_estado)
                            <option value="{{ $base_estado->id }}">{{ $base_estado->nombre }}</option>
                            @endforeach
                        </x-native-select>
                    </div>
                    <div class="col-12 col-lg-3">
                        <x-native-select label="¿Tiene garaje?" wire:model="garaje">
                            <option selected></option>
                            <option value="Privado">Privado</option>
                            <option value="Comunal">Comunal</option>
                            <option value="No">No</option>
                        </x-native-select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12 col-lg-3">
                        <x-native-select label="Ciudad" class="readonly" wire:model="ciudades" disabled>
                            <option value="1" selected>Bogotá</option>
                        </x-native-select>
                    </div>
                    <div class="col-12 col-lg-3">
                        <x-input type="text" wire:model="direccion" placeholder="Ejemplo: Calle 12A #34B-05"
                            label="Dirección" />
                    </div>
                    @if($horizontal)
                    <div class="col-12 col-lg-3">
                        <x-input type="text" wire:model="detallesdir" placeholder="Ejemplo: Apto 607 Torre 8"
                            label="Detalles" />
                    </div>
                    @endif
                    <div class="col-12 col-lg-3">
                        <x-native-select label="Vista" wire:model="tipo_vista">
                            <option selected></option>
                            @foreach($base_vistas as $base_vista)
                            <option value="{{ $base_vista->id }}">{{ $base_vista->nombre }}</option>
                            @endforeach
                        </x-native-select>
                    </div>
                </div>
                <div class="row mb-3">
                    <p class="titulo my-3">Características del inmueble</p>
                    <div class="col-12 col-lg-3">
                        <x-input type="number" onkeydown="if(event.key==='.'){event.preventDefault();}"
                            oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');"
                            wire:model="n_habitaciones" label="Número de habitaciones" />
                        <small>Sin incluir servicio</small>
                    </div>
                    <div class="col-12 col-lg-3">
                        <x-native-select label="Piso de habitación(es)" wire:model="mat_habitacion">
                            <option selected></option>
                            @foreach($base_mats_habitacion as $base_mat_habitacion)
                            <option value="{{ $base_mat_habitacion->id }}">{{ $base_mat_habitacion->nombre }}</option>
                            @endforeach
                        </x-native-select>
                    </div>
                    <div class="col-12 col-lg-3">
                        <x-input type="number" onkeydown="if(event.key==='.'){event.preventDefault();}"
                            oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');"
                            wire:model="n_banos" label="Número de baños" />
                        <small>Sin incluir servicio o social</small>
                    </div>
                    <div class="col-12 col-lg-3">
                        <x-native-select label="Piso de baño" wire:model="mat_banos">
                            <option selected></option>
                            @foreach($base_mats_bano as $base_mat_bano)
                            <option value="{{ $base_mat_bano->id }}">{{ $base_mat_bano->nombre }}</option>
                            @endforeach
                        </x-native-select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12 col-lg-3">
                        <x-native-select label="Mobiliario cocina" wire:model="mb_cocina">
                            <option selected></option>
                            @foreach($base_mobs_cocina as $base_mob_cocina)
                            <option value="{{ $base_mob_cocina->id }}">{{ $base_mob_cocina->nombre }}</option>
                            @endforeach
                        </x-native-select>
                    </div>
                    <div class="col-12 col-lg-3">
                        <x-native-select label="Piso de cocina" wire:model="mat_cocina">
                            <option selected></option>
                            @foreach($base_mats_cocina as $base_mat_cocina)
                            <option value="{{ $base_mat_cocina->id }}">{{ $base_mat_cocina->nombre }}</option>
                            @endforeach
                        </x-native-select>
                    </div>
                    <div class="col-12 col-lg-3">
                        <x-native-select label="Tipo de estufa" wire:model="tipo_estufa">
                            <option selected></option>
                            @foreach($base_estufas as $base_estufa)
                            <option value="{{ $base_estufa->id }}">{{ $base_estufa->nombre }}</option>
                            @endforeach
                        </x-native-select>
                    </div>
                    <div class="col-12 col-lg-3">
                        <x-native-select label="Tipo de horno" wire:model="tipo_horno">
                            <option selected></option>
                            @foreach($base_hornos as $base_horno)
                            <option value="{{ $base_horno->id }}">{{ $base_horno->nombre }}</option>
                            @endforeach
                        </x-native-select>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-12 col-lg-3">
                        <x-native-select label="Piso de sala y comedor" wire:model="mat_salacomedor">
                            <option selected></option>
                            @foreach($base_mats_sala as $base_mat_sala)
                            <option value="{{ $base_mat_sala->id }}">{{ $base_mat_sala->nombre }}</option>
                            @endforeach
                        </x-native-select>
                    </div>
                    <div class="col-12 col-lg-3">
                        <x-native-select label="Tipo de calentador" wire:model="tipo_calentador">
                            <option selected></option>
                            @foreach($base_calentadores as $base_calentador)
                            <option value="{{ $base_calentador->id }}">{{ $base_calentador->nombre }}</option>
                            @endforeach
                        </x-native-select>
                    </div>
                    <div class="col-12 col-lg-3">
                        <x-native-select label="Niveles del inmueble" wire:model="n_niveles">
                            <option selected></option>
                            @foreach($base_niveles as $base_nivel)
                            <option value="{{ $base_nivel->id }}">{{ $base_nivel->nombre }}</option>
                            @endforeach
                        </x-native-select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12 col-lg">
                        <x-toggle md left-label="Balcón" wire:model="balcon" />
                    </div>
                    <div class="col-12 col-lg">
                        <x-toggle md left-label="Terraza" wire:model="terraza" />
                    </div>
                    <div class="col-12 col-lg">
                        <x-toggle md left-label="Closet" wire:model="closet" />
                    </div>
                    <div class="col-12 col-lg">
                        <x-toggle md left-label="Baño social" wire:model="bano_social" />
                    </div>
                    <div class="col-12 col-lg">
                        <x-toggle md left-label="Estudio" wire:model="estudio" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12 col-lg">
                        <x-toggle md left-label="Depósito" wire:model="deposito" />
                    </div>
                    <div class="col-12 col-lg">
                        <x-toggle md left-label="Zonas verdes" wire:model="zonas_verdes" />
                    </div>
                    <div class="col-12 col-lg">
                        <x-toggle md left-label="Entrega cortinas" wire:model="cortina" />
                    </div>
                    <div class="col-12 col-lg">
                        @if($tipo_inmueble==1)
                        <x-toggle md left-label="Patio" class="animate__animated animate__fadeIn" wire:model="patio" />
                        @endif
                    </div>
                    <div class="col-12 col-lg">
                        @if($tipo_inmueble==1)
                        <x-toggle md left-label="Jardin interior" class="animate__animated animate__fadeIn"
                            wire:model="jardin_interior" />
                        @endif
                    </div>
                </div>
                <div class="row mt-5 mb-3">
                    <div class="col-12 col-lg">
                        <x-input type="number" onkeydown="if(event.key==='.'){event.preventDefault();}"
                            oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');"
                            wire:model="a_contruida" label="Área construida (m2)" />
                        @if($balcon || $terraza) <small class="animate__animated animate__fadeIn">Sin
                            balcón(es) y/o terraza(s)</small> @endif
                    </div>
                    <div class="col-12 col-lg">
                        <x-input type="number" onkeydown="if(event.key==='.'){event.preventDefault();}"
                            oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');"
                            wire:model="a_privada" label="Área privada (m2)" />
                        @if($balcon || $terraza) <small class="animate__animated animate__fadeIn">Sin
                            balcón(es) y/o terraza(s)</small> @endif
                    </div>
                    @if($tipo_inmueble==1)
                    <div class="col-12 col-lg animate__animated animate__fadeInUp">
                        <x-input type="number" onkeydown="if(event.key==='.'){event.preventDefault();}"
                            oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');"
                            wire:model="aterreno" label="Área del terreno (m2)" />
                    </div>
                    @endif
                    @if($balcon)
                    <div class="col-12 col-lg animate__animated animate__fadeInUp">
                        <x-input type="number" onkeydown="if(event.key==='.'){event.preventDefault();}"
                            oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');"
                            wire:model="a_balcon" label="Área del balcón (m2)" />
                    </div>
                    @endif
                    @if($terraza)
                    <div class="col-12 col-lg">
                        <x-input type="number" class="animate__animated animate__fadeInUp"
                            onkeydown="if(event.key==='.'){event.preventDefault();}"
                            oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');"
                            wire:model="a_terraza" label="Área de la terraza (m2)" />
                    </div>
                    @endif
                </div>
                @if($tipo_inmueble==2)
                <div class="row mb-3">
                    <div class="col-12 col-lg-3 animate__animated animate__fadeInUp">
                        <x-input type="number" onkeydown="if(event.key==='.'){event.preventDefault();}"
                            oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');" wire:model="piso"
                            label="Piso en que está el inmueble" />
                    </div>
                    @if($piso>1 && $horizontal)
                    <div class="col-12 col-lg-3  animate__animated animate__fadeInUp">
                        <x-native-select label="Ascensor(es)" wire:model="ascensores">
                            <option selected></option>
                            @foreach($base_ascensores as $base_ascensor)
                            <option value="{{ $base_ascensor->id }}">{{ $base_ascensor->nombre }}</option>
                            @endforeach
                        </x-native-select>
                    </div>
                    @endif
                    @if($cortina)
                    <div class="col-12 col-lg-3  animate__animated animate__fadeInUp">
                        <x-native-select label="Tipo de cortina" wire:model="tipo_cortinas">
                            <option selected></option>
                            @foreach($base_tps_cortina as $base_tp_cortina)
                            <option value="{{ $base_tp_cortina->id }}">{{ $base_tp_cortina->nombre }}</option>
                            @endforeach
                        </x-native-select>
                    </div>
                    @endif
                </div>
                @endif
                
                <div class="row mb-3">
                    @if($estado>3)
                    <div class="col-12 col-lg-3 animate__animated animate__fadeInUp">
                        <x-input type="number" onkeydown="if(event.key==='.'){event.preventDefault();}"
                            oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');"
                            wire:model="tiempo" label="Años de construido" />
                    </div>
                    @if($tiempo>=5 && $estado ==4 )
                    <div class="col-12 col-lg-3 animate__animated animate__fadeInUp">
                        <x-native-select label="Remodelado hace menos de 5 años" wire:model="remodelado">
                            <option selected></option>
                            @foreach($base_remodelado as $base_remodelado)
                            <option value="{{ $base_remodelado->id }}">{{ $base_remodelado->nombre }}</option>
                            @endforeach
                        </x-native-select>
                    </div>
                    @endif
                    @if($remodelado==1)
                    <div class="col-12 col-lg-3  animate__animated animate__fadeInUp">
                        <x-native-select label="¿Incluyó cambio total de tuberías?" wire:model="tuberia">
                            <option selected></option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </x-native-select>
                    </div>
                    @endif
                    @endif
                    @if($cortina && $tipo_inmueble==1)
                    <div class="col-12 col-lg-3  animate__animated animate__fadeInUp">
                        <x-native-select label="Tipo de cortina" wire:model="tipo_cortinas">
                            <option selected></option>
                            @foreach($base_tps_cortina as $base_tp_cortina)
                            <option value="{{ $base_tp_cortina->id }}">{{ $base_tp_cortina->nombre }}</option>
                            @endforeach
                        </x-native-select>
                    </div>
                    @endif
                </div>
                
                @if($garaje=="Privado")
                <div class="row mb-3">
                    <p class="titulo my-3">Garajes</p>
                    <div class="col-12 col-lg-3">
                        <x-input type="number" onkeydown="if(event.key==='.'){event.preventDefault();}"
                            oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');"
                            wire:model="n_garajes" label="Cantidad de garajes" />
                    </div>
                    <div class="col-12 col-lg-3">
                        <x-native-select label="Tipo" wire:model="tipo_garaje">
                            <option selected></option>
                            <option value="1">Independiente(s)</option>
                            <option value="2">Servidumbre</option>
                            @if($n_garajes>1)
                            <option value="3">En línea</option>
                            @endif
                        </x-native-select>
                    </div>
                    <div class="col-12 col-lg-3">
                        <x-native-select label="Garaje cubierto" wire:model="garaje_cubierto">
                            <option selected></option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </x-native-select>
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