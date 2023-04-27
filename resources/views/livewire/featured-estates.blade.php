<div>
    <div class="w-11/12 min-h-0 p-5 m-auto">
        <h2 class="text-center text-4xl my-5">Propiedades destacadas</h2>
        <div class="w-full min-h-0 m-auto grid grid-cols-3 grid-rows-2 justify-items-center gap-12 p-5">
            @foreach ($featureds as $featured)
                <div class="w-80 relative z-20 bg-white border border-indigo-400 rounded-lg shadow">
                    @if ($featured->operation == 'Venta')
                        <h3 class="absolute block w-24 z-40 text-center top-5 left-3/4 rotate-45 bg-green-500">
                            {{ $featured->operation }}
                        </h3>
                    @endif

                    @if ($featured->operation == 'Alquiler')
                        <h3 class="absolute block w-24 z-40 text-center top-5 left-3/4 rotate-45 bg-blue-500">
                            {{ $featured->operation }}
                        </h3>
                    @endif

                    @if ($featured->operation == 'Subasta')
                        <h3 class="absolute block w-24 z-40 text-center top-5 left-3/4 rotate-45 bg-orange-500">
                            {{ $featured->operation }}
                        </h3>
                    @endif



                    <img class="w-full h-48 rounded-t" src="{{ asset('img/' . $featured->image) }}">

                    <div class="p-5">
                        <h3 class="text-gray-500 text-center text-xl">Ref.: #{{ $featured->refer }}</h3>
                        @if ($featured->state == 'Disponible')
                            <h3 class="block text-xl py-1 my-3 text-center text-white bg-green-800">
                                {{ $featured->state }}
                            </h3>
                        @endif

                        @if ($featured->state == 'Alquilado')
                            <h3 class="block text-xl py-1 my-3 text-center text-white bg-red-800">
                                {{ $featured->state }}
                            </h3>
                        @endif

                        @if ($featured->state == 'Reservado')
                            <h3 class="block text-xl py-1 my-3 text-center text-white bg-orange-800">
                                {{ $featured->state }}
                            </h3>
                        @endif

                        @if ($featured->state == 'Vendido')
                            <h3 class="block text-xl py-1 my-3 text-center text-white bg-red-800">
                                {{ $featured->state }}
                            </h3>
                        @endif

                        <h5 class="mb-2 text-xl text-center font-bold tracking-tight text-gray-900">
                            {{ $featured->city }} | {{ $featured->country }}</h5>
                        <h5 class="mb-2 text-lg text-center font-bold tracking-tight text-gray-900">
                            {{ $featured->address }}</h5>
                        <h5 class="mb-2 text-xl text-center font-bold tracking-tight text-gray-900">
                            Tipo: {{ $featured->type }}</h5>

                        <h5 class="mb-2 text-xl text-center font-bold tracking-tight text-gray-900">
                            {{ $featured->price }} <span class="text-green-500">USD</span></h5>

                        <div class="mt-5 flex items-center justify-between">
                            <div>
                                <i class="fas fa-bed text-gray-700 text-xl"><span> {{ $featured->ambients }}</span></i>
                                <i class="fas fa-ruler text-gray-700 text-xl ml-5"><span>
                                        {{ $featured->square_meters }} m2</span></i>
                            </div>



                            @if ($featured->state == 'Disponible')
                                <a href="http://127.0.0.1:8000/detalle/{{ $featured->id }}" 
                                    class="block ml-16 text-green-700 text-4xl float-right mr-auto hover:text-green-900"><i
                                        class="fas fa-eye"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
