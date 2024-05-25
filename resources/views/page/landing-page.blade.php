@extends('layout.app')

@section('content')
    <div class="w-full h-full">
        <img src="/assets/img/HERO.png" alt="Hero" class="w-full h-auto">
    </div>



    <div class="flex justify-center items-center pt-[36px] flex-col">
        <p class="text-[#FF5580] text-[40px] flex justify-center pb-[80px]">Mari Belajar</p>
        <div class="grid grid-cols-1 gap-[40px] md:grid-cols-2 md:gap-[60px] lg:grid-cols-3 lg:gap-[80px] items-center">
            <a href="/"
                class="bg-[#FF5580] w-[300px] h-[300px] md:w-[330px] md:h-[330px] lg:w-[360px] lg:h-[360px] rounded-3xl flex flex-col items-center pt-[42px] hover:bg-[#ff7a9b]">
                <img src="/assets/icon/membaca.png" class="h-[120px] w-[120px] md:h-[140px] md:w-[140px] lg:h-[160px] lg:w-[160px] " alt="">
                <p class="text-[#FFFF80] text-[34px] md:text-[44px] lg:text-[54px] pt-[20px]">Membaca</p>

            </a>
            <a href="/"
                class="bg-[#03AED2] w-[300px] h-[300px] md:w-[330px] md:h-[330px] lg:w-[360px] lg:h-[360px] rounded-3xl flex flex-col items-center pt-[42px] hover:bg-[#45c6df]">
                <img src="/assets/icon/menulis.png" class="h-[120px] w-[120px] md:h-[140px] md:w-[140px] lg:h-[160px] lg:w-[160px] " alt="">
                <p class="text-[#C3FF93] text-[34px] md:text-[44px] lg:text-[54px] pt-[20px]">Menulis</p>

            </a>
            <a href="/"
                class="bg-[#FFAA80] w-[300px] h-[300px] md:w-[330px] md:h-[330px] lg:w-[360px] lg:h-[360px] rounded-3xl flex flex-col items-center pt-[42px] hover:bg-[#ffb590]">
                <img src="/assets/icon/mendengar.png" class="h-[120px] w-[120px] md:h-[140px] md:w-[140px] lg:h-[160px] lg:w-[160px] " alt="">
                <p class="text-[#FF0080] text-[34px] md:text-[44px] lg:text-[54px] pt-[20px]">Mendengar</p>
            </a>
            <a href="/"
                class="bg-[#C3FF93] w-[300px] h-[300px] md:w-[330px] md:h-[330px] lg:w-[360px] lg:h-[360px] rounded-3xl flex flex-col items-center pt-[42px] hover:bg-[#d3ffaf]">
                <img src="/assets/icon/sains.png" class="h-[120px] w-[120px] md:h-[140px] md:w-[140px] lg:h-[160px] lg:w-[160px] " alt="">
                <p class="text-[#FF70AB] text-[34px] md:text-[44px] lg:text-[54px] pt-[20px]">Sains</p>

            </a>
            <a href="/belajar-angka"
                class="bg-[#FFAF61] w-[300px] h-[300px] md:w-[330px] md:h-[330px] lg:w-[360px] lg:h-[360px] rounded-3xl flex flex-col items-center pt-[42px] hover:bg-[#ffbb77]">
                <img src="/assets/icon/berhitung.png" class="h-[120px] w-[120px] md:h-[140px] md:w-[140px] lg:h-[160px] lg:w-[160px] " alt="">
                <p class="text-[#68D2E8] text-[34px] md:text-[44px] lg:text-[54px] pt-[20px]">Berhitung</p>

            </a>
        </div>
    </div>
@endsection
