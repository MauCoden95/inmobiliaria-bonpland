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

    <section class="bg-white mt-20">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900">Consultar por una propiedad
            </h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500sm:text-xl">¿Estás interesado en esta propiedad? Enviános un mensaje y nos contactaremos con usted a la brevedad.
            </p>
            <form action="#" class="space-y-8" autocomplete="off">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nombre completo</label>
                    <input type="text" id="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                        placeholder="Nombres Apellidos" required>
                </div>

                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Correo electrónico</label>
                    <input type="email" id="email"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                        placeholder="nombre@email.com" required>
                </div>
                
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Teléfono</label>
                    <input type="number" id="phone"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                        placeholder="(+xx) xxxx-xxxx" required>
                </div>

                <div>
                    <label for="refer" class="block mb-2 text-sm font-medium text-gray-900">Código de referencia del inmueble</label>
                    <input type="text" id="refer"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" value="{{ $refer }}"
                        readonly>
                </div>

                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Su mensaje</label>
                    <textarea id="message" rows="6"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                        placeholder="Escriba su mensaje..."></textarea>
                </div>
                <button type="submit"
                    class="flex items-center py-3 px-5 text-xl font-medium text-center text-white rounded-lg bg-orange-700 sm:w-fit hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-primary-300">Enviar mensaje <?xml version="1.0" encoding="UTF-8"?><svg class="ml-5 w-10 h-10" viewBox="0 0 24 24" stroke-width="1.1" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ffffff"><g clip-path="url(#send-diagonal_svg__clip0_2476_13290)" stroke="#ffffff" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"><path d="M22.152 3.553L11.178 21.004l-1.67-8.596L2 7.898l20.152-4.345zM9.456 12.444l12.696-8.89"></path></g><defs><clipPath id="send-diagonal_svg__clip0_2476_13290"><path fill="#fff" d="M0 0h24v24H0z"></path></clipPath></defs></svg></button>
            </form>
        </div>
    </section>

    @include('display.footer')
</body>

</html>
