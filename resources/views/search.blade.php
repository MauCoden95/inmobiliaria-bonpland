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
    @livewireStyles

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    @include('display.header')

    <section class="w-full min-h-0 p-1 mt-20">
        <div class="banner w-11/12 h-60 m-auto p-5 rounded-lg flex items-center justify-center">
            <h1 class="text-7xl text-center text-white">Buscar propiedades</h1>
        </div>
    </section>

    <section class="w-full min-h-0 p-1 mt-20 bg-white">
      <div class="w-11/12 min-h-0 m-auto p-5">
            @livewire('show-estates')
      </div>
    </section>
   
   
    @include('display.footer')


    @livewireScripts
</body>

</html>
