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
    {{-- @if ({{ route('routeName', ['id'=>1]) }})

    @else

    @endif --}}
<body class="bg-[#FFFF80]">

    <header class="bg-[#FFAA80] h-[96px] w-full flex flex-row items-center justify-between fixed z-50">
            <a href="/" class="text-[35px] text-[#FFFF80] pl-[3rem]">SKOOLEN</a>
            <div>
                <a href="#" class="text-[35px] text-[#FFFF80] pr-[3rem]">Belajar</a>
                <a href="#" class="text-[35px] text-[#FFFF80] pr-[3rem]">Login</a>
            </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>

    </footer>
</body>

</html>
