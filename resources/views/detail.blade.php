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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    @include('display.header')
    <div class="w-full min-h-0 bg-white my-24 py-16 px-5">
        <div
            class="h-full w-4/5 m-auto bg-transparent rounded-md bg-clip-padding border border-gray-100">
            <h1 class="text-3xl text-center my-5">Detalles de la propiedad</h1>
            <div class="w-full h-96 flex justify-around p-5">
                <img class="w-3/5 rounded-md" src="{{ asset('img/' . $estate->image) }}" alt="Inmueble">
                <div class="w-2/5 ml-20 flex flex-col items-center">
                    @if ($estate->state == 'Disponible')
                        <h3 class="block w-3/4 text-1xl py-1 mt-3 text-center text-white bg-green-800">
                            {{ $estate->state }}
                        </h3>
                    @endif

                    @if ($estate->state == 'Alquilado')
                        <h3 class="block w-3/4 text-1xl py-1 mt-3 text-center text-white bg-red-800">
                            {{ $estate->state }}
                        </h3>
                    @endif

                    @if ($estate->state == 'Reservado')
                        <h3 class="block w-3/4 text-1xl py-1 mt-3 text-center text-white bg-orange-800">
                            {{ $estate->state }}
                        </h3>
                    @endif

                    @if ($estate->state == 'Vendido')
                        <h3 class="block w-3/4 text-1xl py-1 mt-3 text-center text-white bg-red-800">
                            {{ $estate->state }}
                        </h3>
                    @endif

                    <h3 class="mt-2 text-2xl">{{ $estate->type }}</h3>
                    <h3 class="mt-5 text-xl">{{ $estate->address }}</h3>
                    <h2 class="mt-5 text-xl">{{ $estate->city }} - {{ $estate->country }}</h2>
                    <h5 class="mt-5 text-xl text-center font-bold tracking-tight">
                        {{ $estate->price }} <span class="text-green-500">USD</span></h5>
                    <div class="m-auto mt-5 flex items-center justify-between">
                        <div class="flex">
                            <span class="text-xl"><i class="fas fa-bed">
                                </i> {{ $estate->ambients }} </span>
                            <span class="text-xl ml-5"><i
                                    class="fas fa-ruler"></i> {{ $estate->square_meters }} m2<span></span></>
                        </div>
                       
                    </div>

                    <h3 class="mt-2 text-md text-gray-800">
                        Ref.: #{{ $estate->refer }}
                        <a href="http://127.0.0.1:8000/consultar/{{ $estate->refer }}" class="bg-gray-500 text-white ml-7 py-1 px-3 hover:bg-gray-400 hover:text-gray-700"><i class="fas fa-info-circle"></i> Consultar</a>
                    </h3>
                </div>
            </div>
        </div>
    </div>

    @include('display.footer')
</body>

</html>
