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
            class="{{ request()->is('cuaca*') || request()->routeIs('cuaca.show') ? 'w-full h-full -z-10 fixed' : 'hidden' }}"
            alt="background cuaca">
        <img src="assets/background/background_langit.png"
            class="{{ request()->is('langit*') ? 'w-full h-full -z-10 fixed' : 'hidden' }} alt="background langit">
        <img src="{{ asset('assets/img/login-register/bg-login.png') }}"
            class="{{ request()->is('login*') ? 'w-full h-full -z-10  fixed p-0 m-0' : 'hidden' }} alt="background langit">
        <header
            class="{{ request()->is('login') ? 'hidden' : 'flex' }} bg-[#FFAA80] z-[10] h-[96px] w-full flex-row items-center justify-between top-0 fixed ">
            <a href="/" class="text-[35px] text-[#FFFF80] pl-[2rem]">SKOOLEN</a>
            <div class="@auth flex flex-row @endauth">
                @auth
                    <a href="{{ route('Admin.Dashboard') }}"
                        class="text-[25px] md:text-[30px] lg:text-[35px] text-[#FFFF80] pr-[1rem] md:pr-[1.5rem] lg:pr-[2rem]">Dashboard</a>
                    <form action="{{ route('loginFeatures.Logout.post') }}" method="POST"
                        class="text-[25px] md:text-[30px] lg:text-[35px] text-[#FFFF80] pr-[2rem]">
                        @csrf
                        <button type="submit" class="text-red">logout</button>
                    </form>
                @else
                    <a href="/"
                        class="text-[25px] md:text-[30px] lg:text-[35px] text-[#FFFF80] pr-[1rem] md:pr-[1.5rem] lg:pr-[2rem]">Belajar</a>
                    <a href="{{ route('login') }}"
                        class="text-[25px] md:text-[30px] lg:text-[35px] text-[#FFFF80] pr-[2rem]">Login</a>
                @endauth
            </div>
        </header>
        <main class="{{ request()->is('login') ? 'mt-0' : 'mt-20' }}">
            @yield('content')
        </main>
        <footer class="bg-[#FFAA80] text-[#FFFF80] py-8">
            <div class="container mx-auto flex flex-col md:flex-row justify-between items-center py-5">
                <div class="mb-6 md:mb-0">
                    <h3 class="text-2xl font-bold">SKOOLEN</h3>
                    <p class="mt-2">Membantu belajar dengan cara yang menyenangkan.</p>
                </div>
                <div class="mb-6 md:mb-0">
                    <h4 class="text-xl font-semibold">Navigasi</h4>
                    <ul class="mt-2 space-y-2">
                        <li><a href="/" class="hover:underline">Home</a></li>
                        <li><a href="/tentang-kami" class="hover:underline">Tentang Kami</a></li>
                        <li><a href="/contact" class="hover:underline">Kontak</a></li>
                    </ul>
                </div>
            </div>
            <div class="container mx-auto mt-8 text-center border-t border-[#FFFF80] pt-4">
                <p>&copy; 2024 SKOOLEN. All rights reserved.</p>
            </div>
        </footer>
    </body>

    </html>
