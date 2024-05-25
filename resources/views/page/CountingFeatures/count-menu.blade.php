@extends('layout.app')


@section('content')
    <section class="h-full m-20 ">
        <div class="title flex justify-center ">
            <h2 class="text-2xl mt-10 text-justify border-b-4 border-red-300 pb-1 px-4 rounded-md">Mari Kita Belajar
                Berhitung</h2>
        </div>

        <div class="list-menus mt-10 grid grid-cols-2 grid-cols-2 justify-items-center ">
            <div class="learn-number bg-[#008DDA] w-3/5 rounded-lg h-80">
                <div class="m-3 rounded-lg">
                    <img src="{{ asset('assets/img/counting-features/background_angka.jpg') }}" alt=""
                        class="h-48 w-full">
                    <figcaption class="text-center text-lg tracking-wider pt-2">BELAJAR ANGKA</figcaption>
                </div>
                <div class="flex justify-center">
                    <button class="px-5 pt-2 pb-2 bg-cyan-400 rounded-lg text-xl">
                        masuk
                    </button>
                </div>
            </div>
            <div class="learn-times bg-[#E72929] w-3/5 rounded-lg h-80">
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

    {{-- <div class="mt-5"></div>
    <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <img class="w-full" src="img/card-img.jpg" alt="Sunset in the mountains">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Card Title</div>
            <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis
                eaque, exercitationem praesentium nihil.
            </p>
        </div>
        <div class="px-6 py-4">
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#tag1</span>
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#tag2</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#tag3</span>
        </div>
    </div> --}}
@endsection
