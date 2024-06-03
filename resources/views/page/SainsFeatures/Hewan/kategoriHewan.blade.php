@extends('layout.app')

@section('content')
<div class="flex justify-center items-center pt-[36px] flex-col">
    <p class="text-[#FF70AB] text-[40px] flex justify-center pb-[30px]">Tipe Hewan</p>
    <div class="flex flex-row flex-wrap justify-center items-center">
        <div class="w-full md:w-1/2 lg:w-1/3 px-8 py-8">
            <a href="/hewan" class="bg-[#FF5580] w-full h-auto flex flex-col items-center">
                <img src="assets/img/sains/hewan/mamalia.jpg" class="w-full h-[300px] md:h-[315px] lg:h-[430px] object-cover" alt="">
                <p class="text-[#FFFF80] text-[29px] md:text-[39px] lg:text-[49px] px-[10px]">Mamalia</p>
            </a>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-8 py-8">
            <a href="/hewan" class="bg-[#FF5580] w-full h-auto flex flex-col items-center">
                <img src="assets/img/sains/hewan/burung.jpg" class="w-full h-[300px] md:h-[315px] lg:h-[430px] object-cover" alt="">
                <p class="text-[#FFFF80] text-[29px] md:text-[39px] lg:text-[49px] px-[10px]">Burung</p>
            </a>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-8 py-8">
            <a href="/hewan" class="bg-[#FF5580] w-full h-auto flex flex-col items-center">
                <img src="assets/img/sains/hewan/reptil.jpg" class="w-full h-[300px] md:h-[315px] lg:h-[430px] object-cover" alt="">
                <p class="text-[#FFFF80] text-[29px] md:text-[39px] lg:text-[49px] px-[10px]">Reptil</p>
            </a>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-8 py-8">
            <a href="/hewan" class="bg-[#FF5580] w-full h-auto flex flex-col items-center">
                <img src="assets/img/sains/hewan/amfibi.jpg" class="w-full h-[300px] md:h-[315px] lg:h-[430px] object-cover" alt="">
                <p class="text-[#FFFF80] text-[29px] md:text-[39px] lg:text-[49px] px-[10px]">Amfibi</p>
            </a>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-8 py-8">
            <a href="/hewan" class="bg-[#FF5580] w-full h-auto flex flex-col items-center">
                <img src="assets/img/sains/hewan/ikan.jpg" class="w-full h-[300px] md:h-[315px] lg:h-[430px] object-cover" alt="">
                <p class="text-[#FFFF80] text-[29px] md:text-[39px] lg:text-[49px] px-[10px]">Ikan</p>
            </a>
        </div>
    </div>
</div>
@endsection
