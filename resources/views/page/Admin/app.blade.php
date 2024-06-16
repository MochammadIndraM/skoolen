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

<body>
    <aside
        class="fixed group animation-aside left-0 top-0 h-screen z-10 w-[calc(3.73rem)] border-r border-gray-300/40 bg-white  hover:w-56 hover:shadow-2xl">
        <div class="flex flex-col justify-between h-screen">
            <div>
                <div class="h-16 border-b border-gray-300/40 flex items-center">
                    <a href="{{ route('Admin.Dashboard') }}" class="flex flex-row w-max px-2.5 overflow-hidden">
                        <img class="h-10" src="{{ asset('assets/icon/skoolen.png') }}" alt="image skoolen">
                        <span
                            class="flex items-center px-[10px]  justify-center text-[30px] text-orange-300">SKOOLEN</span>
                    </a>
                </div>
                <div class="mt-6">
                    <ul class="px-1 -ml-px space-y-4 font-medium tracking-wide overflow-hidden hover:w-full">
                        <li class="mt-[10px] w-max space-y-4 group-hover:w-full">
                            <a href="{{ route('Admin.Dashboard') }}"
                                class="{{ request()->is('dashboard') ? 'bg-[#FFAA80] block py-3 w-[52px] rounded-full group-hover:w-full' : '' }}">
                                <div class="w-max flex items-center px-3 gap-4">
                                    <img class="h-7 w-7" src="{{ asset('assets/icon/dashboard.png') }}"
                                        alt="image dasboard">
                                    <span class="px-[2px] text-[20px]">Dashboard</span>
                                </div>
                            </a>
                        </li>
                        <li class="mt-[10px] w-max space-y-4 group-hover:w-full">
                            <a href="{{ route('Admin.fitur-hewan') }}"
                                class="{{ request()->is('fitur-hewan') ? 'bg-[#FFAA80] block py-3 w-[52px] rounded-full group-hover:w-full' : '' }}">
                                <div class="w-max flex items-center gap-4 px-3">
                                    <img class="h-7 w-7" src="{{ asset('assets/icon/burung.png') }}" alt="">
                                    <span class="px-[2px] text-[20px]">Fitur Hewan</span>
                                </div>
                            </a>
                        </li>
                        <li class="mt-[10px] w-max space-y-4 group-hover:w-full">
                            <a href="{{ route('Admin.fitur-tumbuhan') }}"
                                class="{{ request()->is('fitur-tumbuhan') ? 'bg-[#FFAA80] block py-3 w-[52px] rounded-full group-hover:w-full' : '' }}">
                                <div class=" w-max flex items-center gap-4 px-3">
                                    <img class="h-7 w-7" src="{{ asset('assets/icon/tumbuhan.png') }}" alt="">
                                    <span class="px-[2px] text-[20px]">Fitur Tumbuhan</span>
                                </div>
                            </a>
                        </li>
                        <li class="mt-[10px] w-max space-y-4 group-hover:w-full">
                            <a href="{{ route('Admin.fitur-cuaca') }}"
                                class="{{ request()->is('fitur-cuaca') ? 'bg-[#FFAA80] block py-3 w-[52px] rounded-full group-hover:w-full' : '' }}">
                                <div class="w-max flex items-center gap-4 px-3">
                                    <img class="h-7 w-7" src="{{ asset('assets/icon/cuaca.png') }}" alt="">
                                    <span class="px-[2px] text-[20px]">Fitur Cuaca</span>
                                </div>
                            </a>
                        </li>
                        <li class="mt-[10px] w-max space-y-4 group-hover:w-full">
                            <a href="{{ route('Admin.fitur-langit') }}"
                                class="{{ request()->is('fitur-langit') ? 'bg-[#FFAA80] block py-3 w-[52px] rounded-full group-hover:w-full' : '' }}">
                                <div class="w-max flex items-center gap-4 px-3">
                                    <img class="h-7 w-7" src="{{ asset('assets/icon/langit.png') }}" alt="">
                                    <span class="px-[2px] text-[20px]">Fitur Langit</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <main class="mt-20 w-[calc(100%-3.73rem)] ml-auto">
        <div class="2xl:container mx-auto space-y-6">
            <header
                class="border-b  border-gray-300/40 bg-[#FFAA80] h-16 w-full flex flex-row items-center justify-between top-0 fixed ">
                <a href="#" class="text-[25px] text-[#FFFF80] pl-[2rem]">SKOOLEN</a>
                <div class="flex flex-row mr-10 2xl:mr-32">
                    <form action="{{ route('loginFeatures.Logout.post') }}" method="POST"
                        class="text-[25px] md:text-[30px] lg:text-[35px] text-[#FFFF80] pr-[2rem]">
                        @csrf
                        <button type="submit" class="text-red">logout</button>
                    </form>
                </div>
            </header>
            <div class="mx-[10px] rounded-md border border-collapse border-gray-300/40 z-[-20]">
                @yield('content')
            </div>
        </div>
    </main>
</body>

</html>
