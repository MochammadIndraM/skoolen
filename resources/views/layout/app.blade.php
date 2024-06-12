<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skoolen</title>

    @vite('resources/css/app.css')

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">

</head>

{{-- Background Warna --}}

<body
    class="{{ request()->is('sains*') ? 'bg-[#C3FF93]' : (request()->is('langit*') ? 'bg-[#0F0728]' : (request()->is('kategori-hewan*') ? 'bg-[#68D2E8]' : 'bg-[#FFFF80]')) }}">
    <img src="{{ asset('assets/background/background_cuaca.png') }}"
        class="{{ request()->is('cuaca*') || request()->routeIs('cuaca.show') ? 'w-full h-full -z-10 fixed' : 'hidden' }}" alt="background cuaca">
    <img src="assets/background/background_langit.png"
        class="{{ request()->is('langit*') ? 'w-full h-full -z-10 fixed' : 'hidden' }} alt="background langit">
    <header class="bg-[#FFAA80] z-[10] h-[96px] w-full flex flex-row items-center justify-between top-0 fixed ">
        <a href="/" class="text-[35px] text-[#FFFF80] pl-[2rem]">SKOOLEN</a>
        <div class="">
            <a href="/"
                class="text-[25px] md:text-[30px] lg:text-[35px] text-[#FFFF80] pr-[1rem] md:pr-[1.5rem] lg:pr-[2rem]">Belajar</a>
            <a href="#" class="text-[25px] md:text-[30px] lg:text-[35px] text-[#FFFF80] pr-[2rem]">Login</a>
        </div>
    </header>
    <main class="mt-20">
        @yield('content')
    </main>
    <footer>
    </footer>
</body>

</html>
