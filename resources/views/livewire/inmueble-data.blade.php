<div>
    <nav class="navbar bg-white sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{!! asset('img/logo-vsgris.svg') !!}" class="logo">
            </a>
            <span class="navbar-text fw-bold text-center">
                Portal de registro de inmuebles {{$paso}}
            </span>
            <span class="d-none d-lg-block navbar-text">
                {{$name}}
            </span>
        </div>
    </nav>
    <div class="container-fluid contenido">
        <div class="row">
            <div class="d-none d-lg-block col-lg-2 mt-5 paso">
                <div class="card mx-4 mx-xl-5 mt-4 shadow">
                    <div class="card-body text-center">
                        <div class="@if($paso=="Datos") activo @endif py-1">
                            <i class="lni lni-handshake"></i>
                            <small>Negocio</small>
                        </div>
                        <div class="row my-1">
                            <div class="col-6"></div>
                            <div class="col-6 separador"></div>
                        </div>
                        <div class="@if($paso=="Negocio") activo @endif py-1">
                            <i class="lni lni-control-panel"></i>
                            <small>Detalles</small>
                        </div>
                        <div class="row my-1">
                            <div class="col-6"></div>
                            <div class="col-6 separador"></div>
                        </div>
                        @if($conjunto)
                        <div class="@if($paso=="Detalles") activo @endif py-1">
                            <i class="lni lni-apartment"></i>
                            <small>Conjunto</small>
                        </div>
                        <div class="row my-1">
                            <div class="col-6"></div>
                            <div class="col-6 separador"></div>
                        </div>
                        @endif
                        <div class="py-1 @if(($paso=="Conjunto" && $conjunto) || ($paso=="Detalles" && !$conjunto) )
                            activo @endif">
                            <i class="lni lni-radio-button"></i>
                            <small>Planes</small>
                        </div>
                        <div class="row my-1">
                            <div class="col-6"></div>
                            <div class="col-6 separador"></div>
                        </div>
                        @if($plan==1)
                        <div class="py-1 @if($paso=="Plan") activo @endif">
                            <i class="lni lni-camera"></i>
                            <small>Fotos</small>
                        </div>
                        <div class="row my-1">
                            <div class="col-6"></div>
                            <div class="col-6 separador"></div>
                        </div>
                        @endif
                        <div class="py-1">
                            <i class="lni lni-empty-file"></i>
                            <small>Certificado</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-lg-none paso ">
                <div class="card shadow mobil mt-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 @if($paso=="Datos") activo @endif ">
                                <i class=" lni lni-handshake"></i>
                            </div>
                            <div class="col-2 @if($paso=="Negocio") activo @endif">
                                <i class="lni lni-control-panel"></i>
                            </div>
                            @if($conjunto)
                            <div class="col-2 @if($paso=="Detalles") activo @endif">
                                <i class="lni lni-apartment"></i>
                            </div>
                            @endif
                            <div class="col-2 @if(($paso=="Conjunto" && $conjunto) || ($paso=="Detalles" && !$conjunto)
                                ) activo @endif ">
                                <i class=" lni lni-radio-button"></i>
                            </div>
                            @if($plan==1)
                            <div class="col-2 @if($paso=="Plan") activo @endif">
                                <i class="lni lni-camera"></i>
                            </div>
                            @endif
                            <div class="col-2">
                                <i class="lni lni-empty-file"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-10 pe-0 pe-lg-5 formulario">
                @if($paso=="Datos")
                <livewire:negocio :negocioglobal="$negocioglobal" />
                @elseif($paso=="Negocio")
                <livewire:detalles :negocioglobal="$negocioglobal" />
                @elseif($paso=="Detalles" && $conjunto)
                <livewire:conjunto :negocioglobal="$negocioglobal" />
                @elseif(($paso=="Conjunto" && $conjunto) || ($paso=="Detalles" && !$conjunto) )
                <livewire:planes :negocioglobal="$negocioglobal" />
                @elseif($paso=="Plan" && $plan==1)
                <livewire:fotos :negocioglobal="$negocioglobal" />
                @elseif(($paso=="Fotos" && $plan==1) ||($paso=="Plan" && $plan != 1))
                <livewire:certficado :negocioglobal="$negocioglobal" />
                @endif
            </div>
        </div>
    </div>
</div>