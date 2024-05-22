@extends('layout.app')

@section('content')
    <div>
        <img src="/assets/img/HERO.png" alt="Hero" class="w-[100%] h-auto">
    </div>

    <div class="flex justify-center items-center pt-[36px] flex-col">
        <p class="text-[#FF5580] text-[40px] flex justify-center pb-[80px]">Mari Belajar</p>
        <div class="flex flex-row gap-[80px]">
            <a href="/" class="bg-[#FF5580] w-[360px] h-[360px] rounded-3xl flex flex-col items-center pt-[42px]">
                <img src="/assets/icon/membaca.png" class="h-[160px] w-[160px] " alt="">
                <p class="text-[#FFFF80] text-[54px] pt-[20px]">Membaca</p>

            </a>
            <a href="/" class="bg-[#03AED2] w-[360px] h-[360px] rounded-3xl flex flex-col items-center pt-[42px]">
                <img src="/assets/icon/menulis.png" class="h-[160px] w-[160px] " alt="">
                <p class="text-[#C3FF93] text-[54px] pt-[20px]">Menulis</p>

            </a>
            <a href="/" class="bg-[#FFAA80] w-[360px] h-[360px] rounded-3xl flex flex-col items-center pt-[42px]">
                <img src="/assets/icon/mendengar.png" class="h-[160px] w-[160px] " alt="">
                <p class="text-[#FF0080] text-[54px] pt-[20px]">Mendengar</p>
            </a>
        </div>
        <div class="flex flex-row gap-[80px] pt-[80px] mb-[160px]">
            <a href="/" class="bg-[#C3FF93] w-[360px] h-[360px] rounded-3xl flex flex-col items-center pt-[42px]">
                <img src="/assets/icon/sains.png" class="h-[160px] w-[160px] " alt="">
                <p class="text-[#FF70AB] text-[54px] pt-[20px]">Sains</p>

            </a>
            <a href="/" class="bg-[#FFAF61] w-[360px] h-[360px] rounded-3xl flex flex-col items-center pt-[42px]">
                <img src="/assets/icon/berhitung.png" class="h-[160px] w-[160px] " alt="">
                <p class="text-[#68D2E8] text-[54px] pt-[20px]">Berhitung</p>

            </a>
        </div>
    </div>

@endsection
