<div>
    <div class="container-fluid landig">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="row">
                    <div class="col-12 descripcion d-flex flex-column justify-content-evenly">
                        <div class="row anim11 animate__animated animate__fadeIn">
                            <div class="col-1 col-md-2"></div>
                            <div class="col-10 col-md-8 text-center">
                                <img src="{!! asset('img/logo-vsgris.svg') !!}" class="d-block d-md-none my-3" alt="">
                                <h2>Registra tu inmueble y obtén un concepto de precio gratis</h2>                                
                            </div>
                        </div>
                        <div class="row anim12 animate__animated animate__fadeIn">
                            <div class="col-1 col-md-3"></div>
                            <div class="col-10 col-md-6 text-center">
                                <img src="{!! asset('img/concepto.png') !!}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="row anim13 animate__animated animate__fadeIn">
                            <div class="col-1 col-md-2"></div>
                            <div class="col-10 col-md-8 text-center">
                                <p>Registra los datos de tu inmueble y en <strong>24 horas</strong>, de días
                                    hábiles, te enviaremos el valor adecuado y un concepto jurídico para que
                                    lo puedas arrendar o
                                    vender
                                </p>
                                <a href="#formulario" class="d-block d-md-none"><button class="boton">
                                        ¡Vamos!</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 formulario d-flex flex-column justify-content-evenly">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8"><img src="{!! asset('img/logo.svg') !!}" class="img-fluid" alt=""></div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <livewire:personal-data />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>