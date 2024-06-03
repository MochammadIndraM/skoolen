@extends('layout.app')


@section('content')
    <section class="h-full m-20 ">
        <div class="title flex justify-center ">
            <h2 class="text-2xl mt-10 text-justify border-b-4 border-red-300 pb-1 px-4 rounded-md">Mari Kita Belajar
                Berhitung</h2>
        </div>

        <div class="list-menus mt-10 grid grid-flow-row justify-items-center md:grid-flow-col  md:gap-[20px]">
            <div class="learn-number bg-[#008DDA] my-[20px] rounded-lg w-[100%] sm:w-[65%] h-80 md:w-[90%] lg:w-[60%]">
                <div class="m-3 rounded-lg">
                    <img src="{{ asset('assets/img/counting-features/background_angka.jpg') }}" alt=""
                        class="h-48 w-full">
                    <figcaption class="text-center text-lg tracking-wider pt-2">BELAJAR ANGKA</figcaption>
                </div>
                <div class="flex justify-center">
                    <a href="{{ route('countingFeatures.LearnNumber') }}">
                        <button class="px-5 pt-2 pb-2 bg-cyan-400 rounded-lg text-xl">
                            masuk
                        </button>
                    </a>
                </div>
            </div>
            <div class="learn-times bg-[#E72929] my-[20px] rounded-lg w-[100%]  sm:w-[65%] h-80 md:w-[90%] lg:w-[60%]">
                <div class="m-3 rounded-lg">
                    <img src="{{ asset('assets/img/counting-features/background_waktu.jpg') }}" alt=""
                        class="h-48 w-full">
                    <figcaption class="text-center text-lg tracking-wider pt-2">BELAJAR ANGKA</figcaption>
                </div>
                <div class="flex justify-center">
                    <button class="px-5 pt-2 pb-2 bg-red-300 rounded-lg text-xl">
                        masuk
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
