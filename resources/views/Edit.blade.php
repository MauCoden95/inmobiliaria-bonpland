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
    <header class="w-full h-24 bg-transparent">
        <div class="w-4/5 h-full m-auto flex items-center justify-between">
            <a href="#">
                <img class="w-36" src="{{ asset('img/Logo.png') }}" alt="logo">
            </a>


        </div>


    </header>

    <form method="POST" action="{{ route('update', [$id]) }}" autocomplete="off"
        class="w-3/4 m-auto mt-5 min-w-0 p-5 m-auto bg-gray-400 rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-50 border border-gray-100"
        enctype="multipart/form-data">
        @csrf
        <h2 class="text-center text-2xl">Editar inmueble</h2>
        <div class="grid grid-cols-2 gap-4">
            <div class="mt-4">
                <x-input id="address" value="{{ $estate->address }}"
                    class="border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 border-yellow-700"
                    type="text" name="address" required autocomplete="Usuario" />
            </div>

            <div class="mt-4">
                <select name="type"
                    class="border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 border-yellow-700">
                    <option value="">--Tipo de propiedad--</option>
                    <option value="Casa">Casa</option>
                    <option value="Departamento">Departamento</option>
                    <option value="Terreno">Terreno</option>
                    <option value="Cochera">Cochera</option>
                    <option value="Lote">Lote</option>
                    <option value="Chalet">Chalet</option>
                    <option value="Local">Local</option>
                </select>
            </div>

            <div class="mt-4">
                <select name="country"
                    class="border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 border-yellow-700">
                    <option value="">--País--</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Uruguay">Uruguay</option>
                </select>
            </div>

            <div class="mt-4">
                <x-input id="city" value="{{ $estate->city }}"
                    class="border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 border-yellow-700"
                    type="text" name="city" required autocomplete="off" />
            </div>

            <div class="mt-4">
                <select name="ambients"
                    class="border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 border-yellow-700">
                    <option value="">--N° de Ambientes--</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>

            <div class="mt-4">
                <input placeholder="Superficie m²" class="border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 border-yellow-700"
                    type="number" name="square_meters" required autocomplete="off" />
            </div>

            <div class="mt-4">
                <x-input id="price" value="{{ $estate->price }}"
                    class="border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 border-yellow-700"
                    type="number" name="price" required autocomplete="off" />
            </div>

            <div class="mt-4">
                <select name="operation"
                    class="border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 border-yellow-700">
                    <option value="">--Operación--</option>
                    <option value="Venta">Venta</option>
                    <option value="Alquiler">Alquiler</option>
                    <option value="Subasta">Subasta</option>
                </select>
            </div>

            <div class="mt-4">
                <x-input id="img"
                    class="border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 border-yellow-700"
                    type="file" name="img" required autocomplete="off" />
            </div>

            <div class="mt-4">
                <select name="state"
                    class="border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 border-yellow-700">
                    <option value="">--Estado--</option>
                    <option value="Disponible">Disponible</option>
                    <option value="Alquilado">Alquilado</option>
                    <option value="Reservado">Reservado</option>
                    <option value="Vendido">Vendido</option>
                </select>
            </div>

            <button id="button" type="submit"
                class="h-10 mt-4 bg-orange-500 hover:bg-orange-700 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full py-2">Editar
                inmueble</button>

            <div class="mt-4">
                <x-input id="id" value="{{ $id }}" class="hidden" type="text" name="id"
                    required autocomplete="Usuario" readonly />
            </div>
        </div>
    </form>

    <script src="{{ asset('js/Main.js') }}"></script>
</body>

</html>
