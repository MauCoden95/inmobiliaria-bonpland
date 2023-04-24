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
    <div class="banner w-11/12 h-60 m-auto my-10 p-5 rounded-lg flex items-center justify-center">
        <h1 class="text-8xl text-center text-white">Contacto</h1>
    </div>

    

    <div class="w-full min-h-0 bg-white flex flex-col items-center justify-evenly">
        <div class="w-11/12 container my-24 px-6 m-auto p-5">

            <!-- Section: Design Block -->
            <section class="mb-32 text-gray-800">
                <div class="flex flex-wrap">
                    <div class="grow-0 shrink-0 basis-auto mb-6 md:mb-0 w-full md:w-6/12 px-3 lg:px-6">
                        <h2 class="text-3xl font-bold mb-6">Contáctanos</h2>
                        <p class="text-gray-500 mb-6">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Laudantium, modi accusantium ipsum corporis quia asperiores
                            dolorem nisi corrupti eveniet dolores ad maiores repellendus enim
                            autem omnis fugiat perspiciatis? Ad, veritatis.
                        </p>
                        <p class="text-gray-500 mb-2">Av. Cabildo 3400 - CABA - <i class="fas fa-phone"></i> (+ 54) 4933-0158</p>
                        <p class="text-gray-500 mb-2">Av. 18 de Julio 1300 - Montevideo - <i class="fas fa-phone"></i> (+ 59) 44684197</p>
                        <p class="text-gray-500 mb-2">bonpland@correo.com</p>
                    </div>
                    <div class="grow-0 shrink-0 basis-auto mb-12 md:mb-0 w-full md:w-6/12 px-3 lg:px-6">
                        <form>
                            <div class="form-group mb-6">
                                <input type="text"
                                    class="form-control block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="exampleInput7" placeholder="Nombre">
                            </div>
                            <div class="form-group mb-6">
                                <input type="number"
                                    class="form-control block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="exampleInput7" placeholder="Teléfono">
                            </div>
                            <div class="form-group mb-6">
                                <input type="email"
                                    class="form-control block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="exampleInput8" placeholder="Correo electrónico">
                            </div>
                            <div class="form-group mb-6">
                                <textarea
                                    class="
              form-control
              block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
            "
                                    id="exampleFormControlTextarea13" rows="3" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="form-group form-check text-center mb-6">
                                <input type="checkbox"
                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
                                    id="exampleCheck87" checked>
                                <label class="form-check-label inline-block text-gray-800" for="exampleCheck87">Send me
                                    a copy of this
                                    message</label>
                            </div>
                            <button type="submit"
                                class="
            w-full
            px-6
            py-2.5
            bg-blue-600
            text-white
            font-medium
            text-xl
            leading-tight
            uppercase
            rounded
            shadow-md
            hover:bg-blue-700 hover:shadow-lg
            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
            active:bg-blue-800 active:shadow-lg
            transition
            duration-150
            ease-in-out">Enviar</button>
                        </form>
                    </div>
                </div>
            </section>
            <!-- Section: Design Block -->

        </div>
        <!-- Container for demo purpose -->
    </div>

    
    @include('display.footer')
</body>

</html>
