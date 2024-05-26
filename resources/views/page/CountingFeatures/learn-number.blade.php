@extends('layout.app')


@section('content')
    <section class="m-20">
        <div class="title flex justify-center ">
            <h2 class="text-2xl mt-10 text-justify border-b-4 border-red-300 pb-1 px-4 rounded-md">Mari Kita Belajar
                Angka 1 sampai 10
            </h2>
        </div>

        <div class="content-learnNumber grid grid-flow-col grid-flow-col-dense gap-1 mt-10">
            <section class="list-number grid grid-cols-3 col-span-3 justify-items-center justify-center">
                <div class="item-number border-dashed border-4 w-36 mb-3">
                    <img src="{{ asset('assets/img/counting-features/icon-angka/angka-1.jpg') }}" alt="">
                </div>
                <div class="item-number border-dashed border-4 w-36 mb-3">
                    <img src="{{ asset('assets/img/counting-features/icon-angka/angka-2.jpg') }}" alt="">
                </div>
                <div class="item-number border-dashed border-4 w-36 mb-3">
                    <img src="{{ asset('assets/img/counting-features/icon-angka/angka-3.jpg') }}" alt="">
                </div>
                <div class="item-number border-dashed border-4 w-36 mb-3">
                    <img src="{{ asset('assets/img/counting-features/icon-angka/angka-4.jpg') }}" alt="">
                </div>
                <div class="item-number border-dashed border-4 w-36 mb-3">
                    <img src="{{ asset('assets/img/counting-features/icon-angka/angka-5.jpg') }}" alt="">
                </div>
                <div class="item-number border-dashed border-4 w-36 mb-3">
                    <img src="{{ asset('assets/img/counting-features/icon-angka/angka-6.jpg') }}" alt="">
                </div>
                <div class="item-number border-dashed border-4 w-36 mb-3">
                    <img src="{{ asset('assets/img/counting-features/icon-angka/angka-7.jpg') }}" alt="">
                </div>
                <div class="item-number border-dashed border-4 w-36 mb-3">
                    <img src="{{ asset('assets/img/counting-features/icon-angka/angka-8.jpg') }}" alt="">
                </div>
                <div class="item-number border-dashed border-4 w-36 mb-3 ">
                    <img src="{{ asset('assets/img/counting-features/icon-angka/angka-9.jpg') }}" alt="">
                </div>
                <div class="item-number border-dashed border-4 w-36 mb-3 col-span-3">
                    <img src="{{ asset('assets/img/counting-features/icon-angka/angka-0.jpg') }}" alt="">
                </div>
            </section>

            <section class=" flex justify-center w-96 ">
                <div class="bg-blue-500 m-5 h-96 rounded-lg ">
                    <div class="img-car flex flex-row flex-wrap justify-center">
                        <img src="{{ asset('assets/img/counting-features/icon-mobil.png') }}" alt=""
                            class="w-20">
                        <img src="{{ asset('assets/img/counting-features/icon-mobil.png') }}" alt=""
                            class="w-20">
                        <img src="{{ asset('assets/img/counting-features/icon-mobil.png') }}" alt=""
                            class="w-20">
                        <img src="{{ asset('assets/img/counting-features/icon-mobil.png') }}" alt=""
                            class="w-20">
                        <img src="{{ asset('assets/img/counting-features/icon-mobil.png') }}" alt=""
                            class="w-20">
                        <img src="{{ asset('assets/img/counting-features/icon-mobil.png') }}" alt=""
                            class="w-20">
                        <img src="{{ asset('assets/img/counting-features/icon-mobil.png') }}" alt=""
                            class="w-20">
                        <img src="{{ asset('assets/img/counting-features/icon-mobil.png') }}" alt=""
                            class="w-20">
                        <img src="{{ asset('assets/img/counting-features/icon-mobil.png') }}" alt=""
                            class="w-20">
                    </div>
                    <div class="item-number flex flex-wrap justify-center items-center">
                        <img src="{{ asset('assets/img/counting-features/icon-angka/angka-1.jpg') }}" alt=""
                            class="w-20 border-dashed border-4  mb-3 mt-5">
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
