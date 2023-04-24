<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    <!--Assets-->
    <link rel="stylesheet" href="{{ asset('css/Styles.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    @include('display.header')

    <section class="w-full min-h-0 p-1 mt-20">
        <div class="banner w-11/12 h-60 m-auto p-5 rounded-lg flex items-center justify-center">
            <h1 class="text-7xl text-center text-white">Buscar propiedades</h1>
        </div>
    </section>

    <section class="w-full min-h-0 p-1 mt-20 bg-white">
        <div class="w-11/12 min-h-0 m-auto p-5">
            <div class="w-11/12 m-auto bg-gray-400 p-3 grid grid-cols-2 justify-items-stretch gap-3">
                <div class="w-96 m-auto flex items-center justify-between">
                    <label>Tipo de propiedad</label>
                    <select name="select" class="text-base text-center p-3 w-2/4" wire:model="type">
                        <option value="">Tipo de propiedad</option>
                        <option value="casa">Casa</option>
                        <option value="departamento">Departamento</option>
                        <option value="terreno">Terreno</option>
                        <option value="cochera">Cochera</option>
                        <option value="lote">Lote</option>
                        <option value="chalet">Chalet</option>
                        <option value="local">Local</option>
                    </select>
                </div>

                <div class="w-96 m-auto flex items-center justify-between">
                    <label>Operación</label>
                    <select name="operation" class="text-base text-center p-3 w-2/4" wire:model="operation">
                        <option value="">--Operación--</option>
                        <option value="Venta">Venta</option>
                        <option value="Alquiler">Alquiler</option>
                        <option value="Subasta">Subasta</option>
                    </select>
                </div>

                <div class="w-96 m-auto flex items-center justify-between">
                    <label>Ambientes</label>
                    <select name="operation" class="text-base text-center p-3 w-2/4" wire:model="ambients">
                        <option value="">--N° de ambientes--</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div class="w-96 m-auto flex items-center justify-between">
                    <label>País</label>
                    <select name="country" class="text-base text-center p-3 w-2/4" wire:model="country_city">
                        <option value="">--País--</option>
                        <option value="Argentina">Argentina</option>
                        <option value="uruguay">Uruguay</option>
                    </select>
                </div>

                <div class="w-96 m-auto flex items-center justify-between">
                    <label>Ciudad</label>
                    <select name="city" class="text-base text-center p-3 w-2/4" wire:model="city">
                        <option value="">--Ciudad--</option>

                    </select>
                </div>

                <div class="w-96 m-auto flex items-center justify-between">
                    <label>Precio mínimo</label>
                    <input class="block w-2/4 text-center" type="number" placeholder="Precio mínimo"
                        wire:model="min_price">
                </div>

                <div class="w-96 m-auto flex items-center justify-between">
                    <label>Precio máximo</label>
                    <input class="block w-2/4 text-center" type="number" placeholder="Precio mínimo"
                        wire:model="max_price">
                </div>

                <div class="w-96 m-auto flex items-center justify-between">
                    <label>Metros cuadrados mínimos</label>
                    <input class="block w-2/4 text-center" type="number" placeholder="Metros cuadrados mínimos"
                        wire:model="min_square_meters">
                </div>

                <div class="w-96 m-auto flex items-center justify-between">
                    <label>Metros cuadrados maximos</label>
                    <input class="block w-2/4 text-center" type="number" placeholder="Metros cuadrados maximos"
                        wire:model="max_square_meters">
                </div>

                <div class="w-96 m-auto">
                    <input type="checkbox" id="vehicle1" name="available" wire:model="available"
                        wire:click="availability">
                    <label for="available"> Mostrar sólo propiedades disponibles</label><br>
                </div>
            </div>
            <div class="w-11/12 min-h-0 m-auto grid grid-cols-3 grid-rows-2 justify-items-stretch gap-12 p-5">
                @if (count($estates) > 0)
                    @foreach ($estates as $estate)
                        <div class="w-80 relative z-20 bg-white border border-indigo-400 rounded-lg shadow">
                            @if ($estate->operation == 'Venta')
                                <h3 class="absolute block w-24 z-40 text-center top-5 left-3/4 rotate-45 bg-green-500">
                                    {{ $estate->operation }}
                                </h3>
                            @endif

                            @if ($estate->operation == 'Alquiler')
                                <h3 class="absolute block w-24 z-40 text-center top-5 left-3/4 rotate-45 bg-blue-500">
                                    {{ $estate->operation }}
                                </h3>
                            @endif

                            @if ($estate->operation == 'Subasta')
                                <h3 class="absolute block w-24 z-40 text-center top-5 left-3/4 rotate-45 bg-orange-500">
                                    {{ $estate->operation }}
                                </h3>
                            @endif

                            <img class="w-full h-48 rounded-t" src="{{ asset('img/' . $estate->image) }}">

                            <div class="p-5">
                                @if ($estate->state == 'Disponible')
                                    <h3 class="block text-xl py-1 my-3 text-center text-white bg-green-800">
                                        {{ $estate->state }}
                                    </h3>
                                @endif

                                @if ($estate->state == 'Alquilado')
                                    <h3 class="block text-xl py-1 my-3 text-center text-white bg-red-800">
                                        {{ $estate->state }}
                                    </h3>
                                @endif

                                @if ($estate->state == 'Reservado')
                                    <h3 class="block text-xl py-1 my-3 text-center text-white bg-orange-800">
                                        {{ $estate->state }}
                                    </h3>
                                @endif

                                @if ($estate->state == 'Vendido')
                                    <h3 class="block text-xl py-1 my-3 text-center text-white bg-red-800">
                                        {{ $estate->state }}
                                    </h3>
                                @endif
                                <h5 class="mb-2 text-xl text-center font-bold tracking-tight text-gray-900">
                                    {{ $estate->city }} | {{ $estate->country }}</h5>
                                <h5 class="mb-2 text-lg text-center font-bold tracking-tight text-gray-900">
                                    {{ $estate->address }}</h5>
                                <h5 class="mb-2 text-xl text-center font-bold tracking-tight text-gray-900">
                                    Tipo: {{ $estate->type }}</h5>

                                <h5 class="mb-2 text-xl text-center font-bold tracking-tight text-gray-900">
                                    {{ $estate->price }} <span class="text-green-500">USD</span></h5>

                                <div class="mt-5 flex items-center justify-between">
                                    <div>
                                        <i class="fas fa-bed text-gray-700 text-xl"><span>
                                                {{ $estate->ambients }}</span></i>
                                        <i class="fas fa-ruler text-gray-700 text-xl ml-5"><span>
                                                {{ $estate->square_meters }} m2</span></i>
                                    </div>

                                    <a href="http://127.0.0.1:8000/detalle/{{ $estate->id }}"
                                        class="text-green-700 text-4xl mr-auto hover:text-green-900"><i class="fas fa-eye"></i></a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h2 class="rounded-sm text-6xl text-black m-auto bg-gray-400 p-10">No hay propiedades disponibles
                        que coincidan con los filtros
                        elegidos</h2>
                @endif

            </div>
        </div>
    </section>


    @include('display.footer')


    @livewireScripts
</body>

</html>
