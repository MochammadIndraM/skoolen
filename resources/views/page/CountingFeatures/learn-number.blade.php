@extends('layout.app')


@section('content')
    <div class="title flex justify-center ">
        <h2 class="text-2xl mt-10 text-justify border-b-4 border-red-300 pb-1 px-4 rounded-md">Mari Kita Belajar
            Angka 1 sampai 10
        </h2>
    </div>

    <div class="block sm:flex sm:flex-row-reverse sm:pt-[40px] lg:px-[80px]">
        <section
            class="pt-[40px] pb-[20px] flex flex-col items-center justify-center  sm:pt-[0px] sm:items-center sm:w-[40%] lg:w-[30%] lg:pt-[-20px]">
            <div class="bg-blue-500 max-h-full rounded-lg m-5 lg:m-[0px]">
                <div class="container-img-mobil flex flex-row flex-wrap justify-center">
                    <img src="{{ asset('assets/img/counting-features/icon-mobil.png') }}" alt="gambar mobil"
                        class="img-mobil w-[70px]">
                </div>
                <div class="item-number-des flex flex-wrap justify-center items-center">
                    <img src="{{ asset('assets/img/counting-features/icon-angka/angka-1.jpg') }}" alt=""
                        class="img_angka w-20 border-dashed border-4  mb-3 mt-5">
                </div>
            </div>
        </section>
        <section
            class="list-number grid grid-cols-3 col-span-3 justify-items-center justify-center sm:gap-[5px] sm:flex-auto lg:px-[50px]">
            @foreach ($dataAngka as $angka)
                <div class="img {{ $angka->deskripsi }} border-dashed border-4 w-[80px] mb-[10px] md:w-[110px]">
                    <ul class="{{ $angka->deskripsi }} hidden">
                        <li class="angka-int">{{ $angka->angka }}</li>
                        <li class="angka-des">{{ $angka->deskripsi }}</li>
                        <li class="img-angka">{{ $angka->img_angka }}</li>
                    </ul>
                    <img src="{{ asset('assets/img/counting-features/icon-angka/' . $angka->img_angka . '.jpg') }}"
                        alt="item number">
                </div>
            @endforeach
        </section>
    </div>
    <script src="{{ asset('assets/js/belajar_berhitung/angka.js') }}"></script>
@endsection
