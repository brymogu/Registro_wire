<div class="animate__animated animate__fadeIn">
    <p class="titulo align-middle my-4 ">Fotos</p>
    <div class="card mb-3 shadow">
        <div class="card-body p-5">
            <form wire:submit.prevent="save">
                <div class="row">
                    <div class="mb-3">
                        <label for="photos" class="form-label">Selecciona las fotos de tu inmueble</label>
                        <x-input class="form-control" type="file" id="photos" wire:model="photos" accept="image/*"
                            data-max-files="30" multiple>
                    </div>
                </div>
                <div class="row">
                    @foreach ($photos as $photo)
                        <div class="col-2">
                            <div class="card shadow mb-3" style="width: 132px">
                                <img src="{{ $photo->temporaryUrl() }}" class="previews m-3 rounded">
                                <div class="card-img-overlay">
                                    <x-button.circle negative icon="trash"
                                        wire:click.prevent="removeImg({{$loop->index}})" />
                                </div>
                            </div>
                        </div>
                        <div class="d-none">{{$count++}}</div>
                        @if ($count % 6==0)
                            </div>
                            <div class="row">
                        @endif
                    @endforeach
                </div>
                <div class="row mt-5">
                    <div class="col-6 col-lg-8">
                    </div>
                    <div class="col-6 col-lg-4 text-end pe-0 me-0">
                        @if($photos != null )
                        <button type="submit" class="boton">
                            Siguiente
                            <i class="lni lni-arrow-right"></i>
                        </button>
                        @else
                        <button class="boton" wire:click="jump">
                            No cuento con fotos
                            <i class="lni lni-arrow-right"></i>
                        </button>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>