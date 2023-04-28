<div>
    <div class="w-full min-h-0 m-auto grid grid-cols-3 grid-rows-2 items-center justify-items-center gap-6 p-3">
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
                                    class="fas fa-ruler"></i>{{ $estate->square_meters }}
                                m2<span></span></>
                        </div>



                        

                            <a href="http://127.0.0.1:8000/edit/{{ $estate->id }}">
                                <img class="w-6" src="{{ asset('img/Edit.svg') }}">
                            </a>

                       

                        <form method="POST" action="/destroy/{{ $estate->id }}">
                            @csrf
                            @method('post')

                            <button class="text-2xl text-red-500 hover:text-red-800">
                                <img class="w-6" src="{{ asset('img/Trash.svg') }}">
                            </button>

                        </form>



                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
