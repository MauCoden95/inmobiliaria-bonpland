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

            <nav class="w-4/5 h-full ">
                <ul class="w-full h-full flex items-center justify-between">
                    <li><button id="btn_list"
                            class="bg-orange-500 text-md text-white p-2 rounded hover:text-white hover:text-orange-800">Listar
                            propiedades</button></li>
                    <li><button id="btn_create"
                            class="bg-orange-500 text-md text-white p-2 rounded hover:text-white hover:text-orange-800">Agregar
                            propiedad</button></li>
                    <li><button id="btn_edit"
                            class="bg-orange-500 text-md text-white p-2 rounded hover:text-white hover:text-orange-800">Editar
                            propiedad</button></li>
                    <li><button id="btn_delete"
                            class="bg-orange-500 text-md text-white p-2 rounded hover:text-white hover:text-orange-800">Eliminar
                            propiedad</button></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a aria-current="page" href="route('logout')"
                                onclick="event.preventDefault();
                            this.closest('form').submit();"
                                class="bg-red-500 text-md text-white p-3 rounded hover:text-white hover:text-red-800">Cerrar
                                sesión <i class="fas fa-sign-out-alt"></i></a>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>


    </header>

    <div
        class="div_list w-3/4 m-auto mt-5 min-w-0 p-5 m-auto bg-gray-400 rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100">
        <h2 class="text-center text-2xl">Listar inmuebles</h2>
        <div class="div_list">

        </div>
    </div>




    <form autocomplete="off"
        class="form_create w-3/4 m-auto mt-5 min-w-0 p-5 m-auto bg-gray-400 rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100">
        @csrf
        <h2 class="text-center text-2xl">Agregar inmueble</h2>
        <div class="grid grid-cols-2 gap-4">
            <div class="mt-4">
                <x-input id="address" placeholder="Dirección"
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
                <x-input id="city" placeholder="Ciudad"
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
                <x-input id="square_meters" placeholder="Superficie M²"
                    class="border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 border-yellow-700"
                    type="number" name="square_meters" required autocomplete="off" />
            </div>

            <div class="mt-4">
                <x-input id="price" placeholder="Precio"
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
                <x-input id="img" placeholder="Imagen"
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
                class="bg-orange-500 hover:bg-orange-700 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">Agregar
                inmueble</button>
        </div>
    </form>


    <form autocomplete="off"
        class="form_edit w-3/4 m-auto mt-5 min-w-0 p-5 m-auto bg-gray-400 rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100">
        @csrf
        <h2 class="text-center text-2xl">Editar inmueble</h2>
        <div class="grid grid-cols-2 gap-4">
            <div class="mt-4">
                <x-input id="address" placeholder="Dirección"
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
                <x-input id="city" placeholder="Ciudad"
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
                <x-input id="square_meters" placeholder="Superficie M²"
                    class="border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 border-yellow-700"
                    type="number" name="square_meters" required autocomplete="off" />
            </div>

            <div class="mt-4">
                <x-input id="price" placeholder="Precio"
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
                <x-input id="img" placeholder="Imagen"
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
                class="bg-orange-500 hover:bg-orange-700 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">Editar
                inmueble</button>
        </div>
    </form>



    <form autocomplete="off"
        class="form_delete w-3/4 m-auto mt-5 min-w-0 p-5 m-auto bg-gray-400 rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100">
        @csrf
        <h2 class="text-center text-2xl">Eliminar inmueble</h2>
        <div class="grid grid-cols-2 gap-4">
            <div class="mt-4">
                <x-input id="address" placeholder="Dirección"
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
                <x-input id="city" placeholder="Ciudad"
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
                <x-input id="square_meters" placeholder="Superficie M²"
                    class="border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 border-yellow-700"
                    type="number" name="square_meters" required autocomplete="off" />
            </div>

            <div class="mt-4">
                <x-input id="price" placeholder="Precio"
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
                <x-input id="img" placeholder="Imagen"
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
                class="bg-orange-500 hover:bg-orange-700 text-black sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">Eliminar
                inmueble</button>
        </div>
    </form>
    </div>

    <script src="{{ asset('js/Main.js') }}"></script>
</body>

</html>
