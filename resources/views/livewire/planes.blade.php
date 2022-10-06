<div class="animate__animated animate__fadeIn">
    <p class="titulo align-middle my-4 ">Escoge tu plan</p>
    <div class="card mb-3 shadow">
        <div class="card-body p-5">
            @if($tipo_negocio == 1)
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10 text-center">
                    <p>En Épica Inmobiliaria<sup>®</sup> contamos con tres planes para la venta de tu inmueble que pagas
                        únicamente
                        cuando se concrete el negocio 🤗
                    </p>
                </div>
                <div class="col-1">
                </div>
            </div>
            <div class="d-none d-lg-block">
                <table id="table" class="table text-center table-hover my-5">
                    <thead>
                        <tr>
                            <th class="text-start">CARACTERÍSTICAS</th>
                            <th>BÁSICO</th>
                            <th>ESTÁNDAR</th>
                            <th>PREMIUM</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-start">Asesoría jurídica (no incluye estudio de títulos)</td>
                            <td><i class="lni lni-checkmark"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                        </tr>
                        <tr>
                            <td class="text-start">Elaboración de promesa de compraventa</td>
                            <td><i class="lni lni-checkmark"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                        </tr>

                        <tr>
                            <td class="text-start">Acompañamiento firma escritura</td>
                            <td><i class="lni lni-checkmark"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                        </tr>
                        <tr>
                            <td class="text-start">Firma electrónica</td>
                            <td><i class="lni lni-checkmark"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                        </tr>
                        <tr>
                            <td class="text-start">Publicación en portales</td>
                            <td>1 normal</td>
                            <td>2 normales</td>
                            <td>1 normales + 1 destacado</td>
                        </tr>
                        <tr>
                            <td class="text-start">Publicación en epicainmobiliaria.com
                            <td><i class="lni lni-minus"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                        </tr>
                        <tr>
                            <td class="text-start">Informes de gestión comercial</td>
                            <td><i class="lni lni-minus"></i></td>
                            <td>Mensual</td>
                            <td>Ilimitado</td>
                        </tr>
                        <tr>
                            <td class="text-start">Fotografías tomadas por nosotros</td>
                            <td><i class="lni lni-minus"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                        </tr>
                        <tr>
                            <td class="text-start">Video</td>
                            <td><i class="lni lni-minus"></i></td>
                            <td><i class="lni lni-minus"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                        </tr>

                        <tr>
                            <td class="text-start">Marketing en redes sociales y bases de datos</td>
                            <td><i class="lni lni-minus"></i></td>
                            <td><i class="lni lni-minus"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-lg-none row mv">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide p-3">
                            <div class="card shadow" style="width: 100%">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold">Básico</h5>
                                </div>
                                <div class="card-footer bg-warning text-white">
                                    Características
                                </div>
                                <div class="p-3 caracteristicas" id="carac_bas">
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Asesoría jurídica <br> <small>(no incluye estudio de
                                                títulos)</small></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Elaboración de promesa de compraventa</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Acompañamiento firma escritura</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Firma electrónica</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Publicación en <strong>1</strong> portal</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide p-3">
                            <div class="card shadow" style="width: 100%">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold">Estándar</h5>
                                    <div id="plus_mv" class="mt-3 text-center"></div>
                                </div>
                                <div class="card-footer bg-warning text-white"> Características
                                </div>
                                <div class="p-3 caracteristicas" id="carac_est">
                                    <div class="row mb-5">
                                        <div class="col-12 text-center fw-bold">Todo lo incluido en básico más:</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Publicación en <strong>2</strong> portales</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Publicación en epicainmobiliaria.com</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Informe <strong>mensual</strong> de gestión comercial</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Elaboración del inventario físico y digital</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Fotografías tomadas por nosotros</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide p-3">
                            <div class="card shadow" style="width: 100%">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold">Premium</h5>
                                    <div id="premes_mv" class="mt-3 text-center"></div>
                                </div>
                                <div class="card-footer bg-warning text-white">
                                    Características
                                </div>
                                <div class="p-3 caracteristicas" id="carac_pre">
                                    <div class="row mb-5">
                                        <div class="col-12 text-center fw-bold">Todo lo incluido en estándar más:</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Publicación en <strong>1 portal destacado</strong> y
                                            <strong>1
                                                portal normal</strong><sup>*</sup>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Informes <strong>ilimitados</strong> de gestión comercial
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Video del inmueble</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Marketing en redes sociales y bases de datos</div>
                                    </div>
                                    <div class="mt-4"><sup>*</sup> Estos valores no son acumulables</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            @endif
            @if($tipo_negocio == 2)
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10 text-center">
                    <p>En Épica Inmobiliaria® contamos con tres planes, que pagas mensualmente <strong>a partir del
                            momento
                            en que sea arrendado</strong>.</p><br>
                    <p>Elige el de tu interés, luego podrás cambiarlo 🤗</p>
                </div>
                <div class="col-1">
                </div>
            </div>
            <div class="d-none d-lg-block">
                <table id="table" class="table text-center table-hover my-5">
                    <thead>
                        <tr>
                            <th class="text-start">CARACTERÍSTICAS</th>
                            <th>BÁSICO</th>
                            <th>ESTÁNDAR</th>
                            <th>PREMIUM</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-start">Elaboración y firma de contrato de arrendamiento</td>
                            <td><i class="lni lni-checkmark"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                        </tr>
                        <tr>
                            <td class="text-start">Garantía de arrendamientos</td>
                            <td><i class="lni lni-checkmark"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                        </tr>
                        <tr>
                            <td class="text-start">Garantía de servicios públicos </td>
                            <td><i class="lni lni-minus"></i></td>
                            <td>Hasta 30% del canon</td>
                            <td>Hasta 50% del canon</td>
                        </tr>
                        <tr>
                            <td class="text-start">Garantía de daños y faltantes</td>
                            <td><i class="lni lni-minus"></i></td>
                            <td><i class="lni lni-minus"></i></td>
                            <td>Hasta 30% del canon</td>
                        </tr>
                        <tr>
                            <td class="text-start">Publicación en portales</td>
                            <td>1 normal</td>
                            <td>2 normales</td>
                            <td>1 normal + 1 destacado</td>
                        </tr>
                        <tr>
                            <td class="text-start">Publicación en epicainmobiliaria.com
                            <td><i class="lni lni-minus"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                        </tr>
                        <tr>
                            <td class="text-start">Informes de gestión comercial</td>
                            <td><i class="lni lni-minus"></i></td>
                            <td>Mensual</td>
                            <td>Ilimitado</td>
                        </tr>
                        <tr>
                            <td class="text-start">Firma electrónica</td>
                            <td><i class="lni lni-checkmark"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                        </tr>
                        <tr>
                            <td class="text-start">Elaboración del inventario físico y digital</td>
                            <td><i class="lni lni-minus"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                        </tr>
                        <tr>
                            <td class="text-start">Inspección y recibimiento con inventario al arrendatario
                            </td>
                            <td><i class="lni lni-minus"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                        </tr>
                        <tr>
                            <td class="text-start">Gestión administrativa de reparaciones
                            </td>
                            <td><i class="lni lni-minus"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                        </tr>
                        <tr>
                            <td class="text-start">Fotografías tomadas por nosotros</td>
                            <td><i class="lni lni-minus"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                        </tr>
                        <tr>
                            <td class="text-start">Video</td>
                            <td><i class="lni lni-minus"></i></td>
                            <td><i class="lni lni-minus"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                        </tr>
                        <tr>
                            <td class="text-start">Marketing en redes sociales y bases de datos</td>
                            <td><i class="lni lni-minus"></i></td>
                            <td><i class="lni lni-minus"></i></td>
                            <td><i class="lni lni-checkmark"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-lg-none row">
                <!-- Slider main container -->
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="card" style="width: 100%">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold">Básico</h5>
                                    <div id="estsem_mv" class="font-weight-bold mt-3 text-center"></div>
                                </div>
                                <div class="card-footer text-white">
                                    Características
                                </div>
                                <div class="p-3 caracteristicas" id="carac_bas">
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Elaboración y firma de contrato de arrendamiento</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Garantía de arrendamientos</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Publicación en <strong>1</strong> portal</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Firma electrónica</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card" style="width: 100%">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold">Estándar</h5>
                                    <div id="plus_mv" class="mt-3 text-center"></div>
                                </div>
                                <div class="card-footer text-white"> Características
                                </div>
                                <div class="p-3 caracteristicas d-flex flex-column" id="carac_est">
                                    <div class="row">
                                        <div class="col-12 text-center fw-bold">Todo lo incluido en básico más:</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Garantía de servicios públicos por hasta el <strong>30% del
                                                canon</strong></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Publicación en <strong>2</strong> portales <sup>*</sup>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Publicación en epicainmobiliaria.com</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Informe <strong>mensual</strong> de gestión comercial</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Elaboración del inventario físico y digital</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Inspección y recibimiento con inventario al arrendatario
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Gestión administrativa de reparaciones</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Fotografías tomadas por nosotros</div>
                                    </div>
                                    <div class="mt-auto"><sup>*</sup> Estos valores no son acumulables</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card" style="width: 100%">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold">Premium</h5>
                                    <div id="premes_mv" class="mt-3 text-center"></div>
                                </div>
                                <div class="card-footer text-white">
                                    Características
                                </div>
                                <div class="p-3 caracteristicas d-flex flex-column " id="carac_pre">
                                    <div class="row">
                                        <div class="col-12 text-center fw-bold">Todo lo incluido en estándar más:</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Garantía de servicios públicos por hasta el <strong>50% del
                                                canon <sup>*</sup> </strong></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Garantía de daños y faltantes por hasta el <strong>30% del
                                                canon</strong></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Publicación en <strong>1 portal destacado</strong> y
                                            <strong>1
                                                portal normal</strong> <sup>*</sup>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Informes <strong>ilimitados</strong> de gestión comercial
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Video del inmueble</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <td><i class="fa fa-check-circle"></i></td>
                                        </div>
                                        <div class="col-10">Marketing en redes sociales y bases de datos</div>
                                    </div>
                                    <div class="mt-auto"><sup>*</sup> Estos valores no son acumulables</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
            @endif
            <form wire:submit.prevent="save">
                <div class="row">
                    <div class="d-none d-lg-block col-3"></div>
                    <div class="col-12 col-lg-6">
                        <x-native-select label="Selecciona el plan de tu preferencia:" wire:model="plan">
                            <option selected></option>
                            @foreach($base_planes as $base_plan)
                            <option value="{{ $base_plan->id }}">{{ $base_plan->nombre }}</option>
                            @endforeach
                        </x-native-select>
                    </div>
                    <div class="d-none d-lg-block "></div>
                </div>
                @if($plan != null && $tipo_negocio == 1)
                <div class="row mt-5 animate__animated animate__fadeInUp">
                    <div class="col-12 col-lg-6 align-self-center">
                        <p class="text-center">Para tu inmueble con valor de <strong class="bold">${{
                                number_format($base_precio, 0,
                                ',', '.') }}</strong>
                        <p class="my-3">El plan {{$nombre}} está compuesto por:</p>
                        <ul class="list-group list-group-flush mb-5">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-1 align-self-center"><i class="lni lni-checkmark"></i>
                                    </div>
                                    <div class="col-11">Un Valor de
                                        ${{ number_format($subtotal, 0,
                                        ',', '.') }}<br>
                                        <p class="text-muted">equivalente al {{$porcentaje}}% sin incluir IVA
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-1 align-self-center"><i class="lni lni-checkmark"></i>
                                    </div>
                                    <div class="col-11">
                                        Se hará efectivo <strong>en la promesa de compraventa</strong>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p class="text-center">¿Cómo está definido este valor?</p>
                        @if($plan==1)
                        <div class="row my-5">
                            <div class="col-1"></div>
                            <div class="col-10 text-end">
                                <div class="row">
                                    <div class="col">Servicios Inmobiliarios</div>
                                    <div class="col">${{ number_format($subtotal, 0,
                                        ',', '.') }}</div>
                                </div>
                                <div class="row border-bottom border-danger">
                                    <div class="col"> <strong>+</strong> IVA </div>
                                    <div class="col">${{ number_format($iva, 0,
                                        ',', '.') }}</div>
                                </div>
                                <div class="row">
                                    <div class="col fw-bold"> Total </div>
                                    <div class="col fw-bold">${{ number_format($total, 0,
                                        ',', '.') }}</div>
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        @else
                        <div class="row my-5">
                            <div class="col-12 text-end">
                                <div class="row mb-2">
                                    <div class="col"></div>
                                    <div class="col text-center">
                                        1° Pago <br>
                                        <small>Al firmar promesa compraventa</small>
                                    </div>
                                    <div class="col text-center">
                                        2° Pago <br>
                                        <small>Al firmar escritura</small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">Servicios Inmobiliarios</div>
                                    <div class="col align-self-center ">${{ number_format($subtotal/2, 0,
                                        ',', '.') }}</div>
                                    <div class="col align-self-center">${{ number_format($subtotal/2, 0,
                                        ',', '.') }}</div>
                                </div>
                                <div class="row">
                                    <div class="col"> <strong>+</strong> IVA </div>
                                    <div class="col">${{ number_format($iva, 0,
                                        ',', '.') }}</div>
                                    <div class="col">${{ number_format($iva, 0,
                                        ',', '.') }}</div>
                                </div>
                                <hr class="text-danger" />
                                <div class="row border-bottom border-danger">
                                    <div class="col fw-bold"> Subtotal </div>
                                    <div class="col fw-bold">${{ number_format($subtotal/2 + $iva, 0,
                                        ',', '.') }}</div>
                                    <div class="col fw-bold">${{ number_format($subtotal/2 + $iva, 0,
                                        ',', '.') }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-4 fw-bold">Total</div>
                                    <div class="col fw-bold text-center">${{ number_format($total, 0,
                                        ',', '.') }}</div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                @endif
                @if($plan != null && $tipo_negocio == 2)
                <div class="row mt-5 animate__animated animate__fadeInUp">
                    <div class="col-3"></div>
                    <div class="col-12 col-lg-6">
                        <p class="text-center">Una vez sea arrendado, estos son los cobros mensuales sobre <strong
                                class="bold">${{
                                number_format($base_precio, 0,
                                ',', '.') }}</strong><sup>*</sup></p>
                        <p class="text-center mb-3"><small class="text-muted">*${{
                                number_format($base_precio, 0,
                                ',', '.') }} incluida cuota de administración de propiedad horizontal si
                                aplicara</small>
                        </p>
                        <div class="row  ">
                            <div class="col-1"></div>
                            <div class="col-10 text-end">
                                <div class="row">
                                    <div class="col">Servicios Inmobiliarios</div>
                                    <div class="col">${{ number_format($servicios, 0,
                                        ',', '.') }}</div>
                                </div>
                                <div class="row">
                                    <div class="col"><strong>+ </strong>Garantía</div>
                                    <div class="col">${{ number_format($base_precio * 0.0216, 0,
                                        ',', '.') }}</div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col fw-bold"> Subtotal</div>
                                    <div class="col fw-bold">${{ number_format($subtotal, 0,
                                        ',', '.') }}</div>
                                </div>
                                <div class="row">
                                    <div class="col"> <strong>+</strong> IVA </div>
                                    <div class="col">${{ number_format($iva, 0,
                                        ',', '.') }}</div>
                                </div>
                                <div class="row border-bottom">
                                    <div class="col"> <strong>+</strong> 4 x mil </div>
                                    <div class="col">${{ number_format($cpm, 0,
                                        ',', '.') }}</div>
                                </div>
                                <div class="row">
                                    <div class="col fw-bold"> Total </div>
                                    <div class="col fw-bold">${{ number_format($total, 0,
                                        ',', '.') }}</div>
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                </div>
                @endif
                @if($plan != null)
                <div class="row mb-3">
                    <div class="col-12 text-center my-3 align-self-center">
                        <x-button teal rounded icon="user-group" href="https://meetings.hubspot.com/kasc/epica"
                            target="_blank" label="¿Tienes dudas?, Agenda una reunión virtual con un agente" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6 align-self-center">
                        <x-toggle md left-label="¿Deseas modificar el valor de tu inmueble?" wire:model="cambio" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        @if($cambio)
                        <x-input type="text" x-mask:dynamic="$money($input,',')" wire:model="base_precio"
                            label="Valor tentativo" />
                        @endif
                    </div>
                </div>
                <div class="row">
                    <x-errors />
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
    <script>
        document.addEventListener('livewire:load', function () {
        const swiper = new Swiper('.swiper', {
        centeredSlides: true,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        })

        
    });
    </script>
</div>