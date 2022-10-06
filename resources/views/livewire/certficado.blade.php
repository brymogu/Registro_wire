<div class="animate__animated animate__fadeIn">
    <p class="titulo align-middle my-4 ">Certificado</p>
    <div class="card mb-3 shadow">
        <div class="card-body p-5">
            <form wire:submit.prevent="save">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="mb-5">
                            <label for="certificado" class="form-label">Carga el certificado de libertad y tradición del
                                inmueble</label>
                            <x-input class="form-control" type="file" id="certificado" wire:model="certificado"
                                accept="application/pdf,image/*" required />
                        </div>
                    </div>
                    @if($tipo_pptario == 2)
                    <div class="col-12 col-lg-6">
                        <div class="my-3">
                            <label for="certificado" class="form-label">Carga la autorización</label>
                            <x-input class="form-control" type="file" id="certificado" wire:model="certificado"
                                required />
                        </div>
                        <div class="alert bg-warning bg-opacity-10 alert-dismissible fade show" role="alert">
                            Debido a que eres apoderado, requerimos de una autorización firmada por el propietario
                            para continuar.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    @endif
                </div>
                
                <div class="row mt-5">
                    <div class="row">
                        <div class="col-6 col-lg-10">
                        </div>
                        <div class="col-6 col-lg-2 text-end pe-0 me-0">
                            <div wire:loading wire:target="certificado">
                                <x-loading></x-loading>
                            </div>

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