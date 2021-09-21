<div>
    <x-jet-dropdown width="96">
        <x-slot name="trigger">
            <span class="relative inline-block cursor-pointer">
            <x-cart color="white"  /> <!--Icono de notificacion para el icono de carrito de compras-->
            <span class="absolute top-0 right-0 inline-block w-2 h-2 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full"></span>
            </span>
        </x-slot>

        <x-slot name="content">
            <div>
                <p class="text-center   text-blue-700  py-6 px-4">
                   Aún no tiene agregado items en el carrito..
                </p>

            </div>

        </x-slot>

    </x-jet-dropdown>
</div>
