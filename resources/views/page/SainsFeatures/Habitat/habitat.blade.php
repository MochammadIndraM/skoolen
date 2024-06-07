@extends('layout.app')

@section('content')
    <div class="title flex justify-center ">
        <h2 class="text-2xl mt-10 text-justify border-b-4 border-red-300 pb-1 px-4 rounded-md">Mari Kita Belajar
            Tentang Habitat Makhluk Hidup
        </h2>
    </div>
    <section class="flex justify-center">
        <div
            class="vidio bg-orange-200 w-[100%] rounded-md h-[200px] mx-[10px] mt-[30px] sm:w-[70%] sm:h-[250px] md:w-[60%] lg:w-[50%] xl:w-[40%]">
            sad
        </div>
    </section>
    <section
        class="bg-green-300 rounded-md h-[200px] overflow-x-auto mx-[10px] mt-[30px] grid grid-flow-col md:mx-[60px] md:mb-[40px] lg:justify-evenly lg:items-center">
        <div class="habitat bg-red-400  rounded-md m-[10px] h-[160px] w-[150px] cursor-pointer hover:bg-red-300">
            <div class="img-pegunungan h-1/2 flex justify-center mt-[5px] ">
                <img src="{{ asset('assets/img/sains/habitat/pegunungan.png') }}" class="h-[100%]" alt="">
            </div>
            <h1 class="text-center mt-[20px] text-2xl">pegunungan</h1>
        </div>
        <div class="habitat bg-blue-400 rounded-md m-[10px] h-[160px] w-[150px] cursor-pointer hover:bg-blue-300">
            <div class="img-gurun h-1/2 flex justify-center mt-[5px] ">
                <img src="{{ asset('assets/img/sains/habitat/gurun.png') }}" class="h-[100%]" alt="">
            </div>
            <h1 class="text-center mt-[20px] text-2xl">gurun</h1>
        </div>
        <div class="habitat bg-red-400 rounded-md m-[10px] h-[160px] w-[150px] cursor-pointer hover:bg-red-300">
            <div class="img-hutan h-1/2 flex justify-center mt-[5px] ">
                <img src="{{ asset('assets/img/sains/habitat/hutan.png') }}" class="h-[100%]" alt="">
            </div>
            <h1 class="text-center mt-[20px] text-2xl">hutan</h1>
        </div>
        <div class="habitat bg-blue-400 rounded-md m-[10px] h-[160px] w-[150px] cursor-pointer hover:bg-blue-300">
            <div class="img-laut h-1/2 flex justify-center mt-[5px] ">
                <img src="{{ asset('assets/img/sains/habitat/laut.png') }}" class="h-[100%]" alt="">
            </div>
            <h1 class="text-center mt-[20px] text-2xl">perairan laut</h1>
        </div>
        <div class="habitat bg-red-400 rounded-md m-[10px] h-[160px] w-[150px] cursor-pointer hover:bg-red-300">
            <div class="img-muara h-1/2 flex justify-center mt-[5px] ">
                <img src="{{ asset('assets/img/sains/habitat/muara.png') }}" class="h-[100%]" alt="">
            </div>
            <h1 class="text-center mt-[20px] text-2xl">muara</h1>
        </div>
    </section>
@endsection
