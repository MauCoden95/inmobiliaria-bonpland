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
    <div class="banner w-11/12 h-60 m-auto my-20 p-5 rounded-lg flex items-center justify-center">
        <h1 class="text-8xl text-center text-white">Nosotros</h1>
    </div>

    <div class="w-full min-h-0 bg-white flex flex-col items-center justify-evenly p-5">
        <h2 class="text-center text-6xl my-10">Quiénes somos</h2>

        <div class="w-4/5 h-72 m-auto mt-10 flex items-center justify-between">
            <img class="w-5/12 h-full rounded-md" src="{{ asset('img/Llave.jpg') }}">
            <div class="w-5/12 h-full text-justify flex flex-col">
                <p class="text-xl">
                    Bonpland es una inmobiliaria con más de 50 años en el sector. Fue fundada por la familia Bonpland y
                    desde sus orígenes posee una identidad basada en la honestidad, capacidad y ética de los negocios.
                </p>

                <p class="mt-5 text-xl">
                    Bonpland cuenta con un equipo humano profesional y dinámico que fomenta el respeto y la honestidad
                    como pilares fundamentales del desempeño.
                </p>
            </div>
        </div>

        <div class="w-4/5 h-72 m-auto mt-16 mb-10 flex items-center justify-between">
            <div class="w-5/12 h-full text-justify flex flex-col">
                <p class="text-xl">
                    A través de nuestros profesionales, lo asesoramos legalmente para lo que nos sea requerido, en forma totalmente gratuita. 
                </p>

                <p class="mt-5 text-xl">
                    Bonpland ofrece un permanente y amplio catálogo de propiedades, tanto en Argentina, como en el Uruguay.
                </p>
            </div>
            <img class="w-5/12 h-full rounded-md" src="{{ asset('img/Visita.jpg') }}">
        </div>


        <h2 class="text-center text-6xl my-10">Nuestra trayectoria</h2>

        
        @include('display.timelapse')
    </div>

    @include('display.footer')
</body>

</html>
