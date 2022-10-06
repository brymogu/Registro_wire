<div>
    <form wire:submit.prevent="save" class="mx-5" id="formulario">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="lastname" placeholder="Perez" wire:model="lastname" required>
            <label for="lastname">Apellidos</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="name" placeholder="Pedro" wire:model="name" required>
            <label for="name">Nombres</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="email" placeholder="a@b.com" wire:model="email" required>
            <label for="email">Correo electrónico</label>
        </div>
        <div class="form-group mb-3">
            <input type="phone" class="form-control" id="phone" wire:model="phone" required>
            <label for="phone">Teléfono celular</label>
        </div>

        <div class="form-check mb-5 tyc">
            <input type="checkbox" class="form-check-input" id="tyc" name="tyc" wire:model="tyc" required>
            <label class="form-check-label" for="tyc">
                Acepto <a
                    href="http://www.epicainmobiliaria.com.co/politica-de-privacidad-y-proteccion-de-datos-personales/"
                    data-toggle="modal" data-target="#exampleModal" target="_blank">términos y
                    condiciones </a>
                del servicio de registro de inmuebles y/o concepto de precio y viabilidad jurídica,
                ademas acepto recibir comunicaciones de Épica Inmobiliaria<sup>®</sup> de
                acuerdo con su <a
                    href="http://epicainmobiliaria.com/politica-de-privacidad-y-proteccion-de-datos-personales/"
                    target="_blank">política de privacidad </a>
            </label>
        </div>

        <button class="boton" type="submit">Empecemos</button>
    </form>
</div>