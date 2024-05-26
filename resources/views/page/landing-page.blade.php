@extends('layout.app')

@section('content')
    <div class="w-full h-full">
        <img src="/assets/img/HERO.png" alt="Hero" class="w-full h-auto">
    </div>

    <div class="flex justify-center items-center pt-[36px] flex-col">
        <p class="text-[#FF5580] text-[40px] flex justify-center pb-[30px]">Mari Belajar</p>
        <div class="flex flex-row flex-wrap justify-center items-center">
            <div class="w-full md:w-1/2 lg:w-1/3 px-8 py-8">
                <a href="/"
                    class="bg-[#FF5580] w-full h-[300px] lg:h-[330px] rounded-3xl flex flex-col items-center pt-[42px] hover:bg-[#ff7a9b]">
                    <img src="/assets/icon/membaca.png"
                        class="h-[120px] w-[120px] md:h-[140px] md:w-[140px] lg:h-[160px] lg:w-[160px] " alt="">
                    <p class="text-[#FFFF80] text-[34px] md:text-[44px] lg:text-[54px] pt-[20px]">Membaca</p>
                </a>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-8 py-8">
                <a href="/"
                    class="bg-[#03AED2] w-full h-[300px] lg:h-[330px] rounded-3xl flex flex-col items-center pt-[42px] hover:bg-[#46bad1]">
                    <img src="/assets/icon/menulis.png"
                        class="h-[120px] w-[120px] md:h-[140px] md:w-[140px] lg:h-[160px] lg:w-[160px] " alt="">
                    <p class="text-[#C3FF93] text-[34px] md:text-[44px] lg:text-[54px] pt-[20px]">Menulis</p>
                </a>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-8 py-8">
                <a href="/"
                    class="bg-[#FFAA80] w-full h-[300px] lg:h-[330px] rounded-3xl flex flex-col items-center pt-[42px] hover:bg-[#ffb794]">
                    <img src="/assets/icon/mendengar.png"
                        class="h-[120px] w-[120px] md:h-[140px] md:w-[140px] lg:h-[160px] lg:w-[160px] " alt="">
                    <p class="text-[#FF0080] text-[34px] md:text-[44px] lg:text-[54px] pt-[20px]">Mendengar</p>
                </a>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-8 py-8">
                <a href="/"
                    class="bg-[#C3FF93] w-full h-[300px] lg:h-[330px] rounded-3xl flex flex-col items-center pt-[42px] hover:bg-[#d2ffad]">
                    <img src="/assets/icon/sains.png"
                        class="h-[120px] w-[120px] md:h-[140px] md:w-[140px] lg:h-[160px] lg:w-[160px] " alt="">
                    <p class="text-[#FF70AB] text-[34px] md:text-[44px] lg:text-[54px] pt-[20px]">Sains</p>
                </a>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-8 py-8">
                <a href="/belajar-angka"
                    class="bg-[#FFAF61] w-full h-[300px] lg:h-[330px] rounded-3xl flex flex-col items-center pt-[42px] hover:bg-[#fcb875]">
                    <img src="/assets/icon/berhitung.png"
                        class="h-[120px] w-[120px] md:h-[140px] md:w-[140px] lg:h-[160px] lg:w-[160px] " alt="">
                    <p class="text-[#68D2E8] text-[34px] md:text-[44px] lg:text-[54px] pt-[20px]">Berhitung</p>
                </a>
            </div>
        </div>
    </div>
@endsection
