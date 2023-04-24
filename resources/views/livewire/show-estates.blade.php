<div>
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
                @foreach ($city_unique as $city)
                    <option value="{{ $city }}">{{ $city }}</option>
                @endforeach
            </select>
        </div>

        <div class="w-96 m-auto flex items-center justify-between">
            <label>Precio mínimo</label>
            <input class="block w-2/4 text-center" type="number" placeholder="Precio mínimo" wire:model="min_price">
        </div>

        <div class="w-96 m-auto flex items-center justify-between">
            <label>Precio máximo</label>
            <input class="block w-2/4 text-center" type="number" placeholder="Precio mínimo" wire:model="max_price">
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
            <input type="checkbox" id="vehicle1" name="available" wire:model="available" wire:click="availability">
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

                    <h3 class="text-gray-500 text-center text-xl mt-3">Ref.: #{{ $estate->refer }}</h3>

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

                        <div class="w-11/12 m-auto mt-5 flex items-center justify-between">
                            <div class="flex">
                                <span class="text-gray-700 text-xl"><i class="fas fa-bed">
                                    </i>{{ $estate->ambients }}</span>
                                <span class="text-gray-700 text-xl ml-5"><i
                                        class="fas fa-ruler"></i>{{ $estate->square_meters }} m2<span></span></>
                            </div>
                            @if ($estate->state == 'Disponible')
                                <a href="http://127.0.0.1:8000/detalle/{{ $estate->id }}" 
                                    class="block ml-16 text-green-700 text-4xl float-right mr-auto hover:text-green-900"><i
                                        class="fas fa-eye"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <h2 class="rounded-sm text-6xl text-black m-auto bg-gray-400 p-10">No hay propiedades disponibles que
                coincidan con los filtros
                elegidos</h2>
        @endif

    </div>
</div>
