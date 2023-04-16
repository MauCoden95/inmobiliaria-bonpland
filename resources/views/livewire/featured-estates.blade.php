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
                            <button>
                                <i class="fas fa-eye text-green-700 text-4xl mr-auto hover:text-green-900"></i>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
