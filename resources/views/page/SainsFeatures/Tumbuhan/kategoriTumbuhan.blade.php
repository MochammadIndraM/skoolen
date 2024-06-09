@extends('layout.app')

@section('content')
    <div class="flex justify-center items-center pt-[36px] flex-col">
        <p class="text-[#FF70AB] text-[40px] flex justify-center pb-[30px]">Kategori Tumbuhan</p>
        <div class="flex flex-row flex-wrap justify-center items-center">
            <div class="w-full md:w-1/2 lg:w-1/3 px-8 py-8">
                <a href="/"
                    class="bg-[#FF5580] w-full h-[300px] lg:h-[330px] rounded-3xl flex flex-col items-center pt-[42px] hover:bg-[#ff7a9b]">
                    <img src="/assets/icon/mamalia.png"
                        class="h-[120px] w-[120px] md:h-[140px] md:w-[140px] lg:h-[160px] lg:w-[160px] " alt="">
                    <p class="text-[#FFFF80] text-[34px] md:text-[44px] lg:text-[54px] pt-[20px]">Bunga</p>
                </a>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-8 py-8">
                <a href="/"
                    class="bg-[#C3FF93] w-full h-[300px] lg:h-[330px] rounded-3xl flex flex-col items-center pt-[42px] hover:bg-[#d3ffb0]">
                    <img src="/assets/icon/burung.png"
                        class="h-[120px] w-[120px] md:h-[140px] md:w-[140px] lg:h-[160px] lg:w-[160px] " alt="">
                    <p class="text-[#FF70AB] text-[34px] md:text-[44px] lg:text-[54px] pt-[20px]">Burung</p>
                </a>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-8 py-8">
                <a href="/"
                    class="bg-[#FFAA80] w-full h-[300px] lg:h-[330px] rounded-3xl flex flex-col items-center pt-[42px] hover:bg-[#ffb794]">
                    <img src="/assets/icon/reptil.png"
                        class="h-[120px] w-[120px] md:h-[140px] md:w-[140px] lg:h-[160px] lg:w-[160px] " alt="">
                    <p class="text-[#FF0080] text-[34px] md:text-[44px] lg:text-[54px] pt-[20px]">Reptil</p>
                </a>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-8 py-8">
                <a href="/"
                    class="bg-[#FFFF80] w-full h-[300px] lg:h-[330px] rounded-3xl flex flex-col items-center pt-[42px] hover:bg-[#fcfc99]">
                    <img src="/assets/icon/amfibi.png"
                        class="h-[120px] w-[120px] md:h-[140px] md:w-[140px] lg:h-[160px] lg:w-[160px] " alt="">
                    <p class="text-[#FF70AB] text-[34px] md:text-[44px] lg:text-[54px] pt-[20px]">Amfibi</p>
                </a>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-8 py-8">
                <a href="/"
                    class="bg-[#FFAF61] w-full h-[300px] lg:h-[330px] rounded-3xl flex flex-col items-center pt-[42px] hover:bg-[#fcb875]">
                    <img src="/assets/icon/ikan.png"
                        class="h-[120px] w-[120px] md:h-[140px] md:w-[140px] lg:h-[160px] lg:w-[160px] " alt="">
                    <p class="text-[#68D2E8] text-[34px] md:text-[44px] lg:text-[54px] pt-[20px]">Ikan</p>
                </a>
            </div>
        </div>
    </div>
@endsection
