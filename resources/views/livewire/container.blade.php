<div>
    @if($inmuebledata == 3)
    <livewire:homepage />
    @elseif($inmuebledata == 1)
    <livewire:inmueble-data>
        @elseif($inmuebledata == 2)
        <livewire:agradecimiento>
            @endif
</div>