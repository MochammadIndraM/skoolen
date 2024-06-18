@extends('layout.app')

@section('content')
    <div class="title flex justify-center ">
        <h2 class="text-2xl mt-10 text-justify border-b-4 border-red-300 pb-1 px-4 rounded-md">Mari Kita Belajar
            Membaca
        </h2>
    </div>
    <div class="block sm:flex sm:flex-row-reverse sm:pt-[40px] pb-5">
        <section
            class="pt-[40px] pb-[20px] flex flex-col items-center justify-center sm:pt-[0px] sm:items-center sm:w-[40%] lg:w-[30%]">
            <div class="img-abjad bg-[#65B741] p-[5px] w-1/2 sm:w-[70%] h-[230px] rounded-md lg:h-[300px]">
                <div class="h-1/2 w-[100%] mb-[20px]">
                    <img src="{{ asset('assets/img/reading-features/deskripsi-abjad/A_ayam.jpg') }}"
                        class="des-img rounded-md w-full h-[130px] lg:h-[200px]" alt="gambar-deskripsi-abjad">
                </div>
                <div class="desAbjad-a">
                    <p class="text-huruf text-4xl text-center text-white pt-[15px] lg:pt-[40px]">Aa</p>
                    <p class="text-des text-2xl text-center text-white">Ayam</p>
                </div>
            </div>
            <a href="{{ route('readingFeatures.GaleryLearnReading') }}">
                <div
                    class="bg-blue-300 mt-[10px] px-[20px] py-[10px] rounded-lg cursor-pointer border-red-400 shadow-lg shadow-black transition-transform duration-300 transform hover:scale-95">
                    <h1>Ayo belajar dengan video</h1>
                </div>
            </a>
        </section>
        <section class="bg-yellow-100 rounded-md p-[5px] m-[20px] overflow-x-auto sm:hidden">
            <div class="p-[5px]  grid grid-flow-col gap-[20px]" style="grid-auto-columns: max-content">
                @foreach ($dataAbjad as $index => $abjad)
                    @if ($index < 9)
                        <div class="img {{ $abjad->img_abjad }}">
                            <ul class="{{ $abjad->img_abjad }} hidden">
                                <li class="abjad-huruf">{{ $abjad->huruf }}</li>
                                <li class="abjad-imgDes">{{ $abjad->img_des }}</li>
                                <li class="abjad-deskripsi">{{ $abjad->deskripsi }}</li>
                            </ul>
                            <img src="{{ asset('assets/img/reading-features/abjad/' . $abjad->img_abjad . '.jpg') }}"
                                class="h-[80px] w-[80px] rounded-md cursor-pointer border-red-400 shadow-lg shadow-black transition-transform duration-300 transform hover:scale-90 "
                                alt="">
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="p-[5px]  grid grid-flow-col gap-[20px]" style="grid-auto-columns: max-content">
                @foreach ($dataAbjad as $index => $abjad)
                    @if (8 < $index && $index < 18)
                        <div class="img {{ $abjad->img_abjad }}">
                            <ul class="{{ $abjad->img_abjad }} hidden">
                                <li class="abjad-huruf">{{ $abjad->huruf }}</li>
                                <li class="abjad-imgDes">{{ $abjad->img_des }}</li>
                                <li class="abjad-deskripsi">{{ $abjad->deskripsi }}</li>
                            </ul>
                            <img src="{{ asset('assets/img/reading-features/abjad/' . $abjad->img_abjad . '.jpg') }}"
                                class="h-[80px] w-[80px] rounded-md cursor-pointer border-red-400 shadow-lg shadow-black transition-transform duration-300 transform hover:scale-90"
                                alt="">
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="p-[5px]  grid grid-flow-col gap-[20px]" style="grid-auto-columns: max-content">
                @foreach ($dataAbjad as $index => $abjad)
                    @if (17 < $index && $index < 26)
                        <div class="img {{ $abjad->img_abjad }}">
                            <ul class="{{ $abjad->img_abjad }} hidden">
                                <li class="abjad-huruf">{{ $abjad->huruf }}</li>
                                <li class="abjad-imgDes">{{ $abjad->img_des }}</li>
                                <li class="abjad-deskripsi">{{ $abjad->deskripsi }}</li>
                            </ul>
                            <img src="{{ asset('assets/img/reading-features/abjad/' . $abjad->img_abjad . '.jpg') }}"
                                class="h-[80px] w-[80px] rounded-md cursor-pointer border-red-400 shadow-lg shadow-black transition-transform duration-300 transform hover:scale-90"
                                alt="">
                        </div>
                    @endif
                @endforeach
            </div>
        </section>
        <section
            class="hidden sm:bg-yellow-100 sm:rounded-md sm:w-[60%] sm:h-[400px] sm:m-[20px] sm:overflow-y-auto sm:flex sm:flex-wrap sm:justify-center lg:w-[70%]">
            @foreach ($dataAbjad as $index => $abjad)
                <div class="img {{ $abjad->img_abjad }} w-1/3 lg:w-1/4 flex justify-center px-[10px] py-[10px]">
                    <ul class="{{ $abjad->img_abjad }} hidden">
                        <li class="abjad-huruf">{{ $abjad->huruf }}</li>
                        <li class="abjad-imgDes">{{ $abjad->img_des }}</li>
                        <li class="abjad-deskripsi">{{ $abjad->deskripsi }}</li>
                    </ul>
                    <img src="{{ asset('assets/img/reading-features/abjad/' . $abjad->img_abjad . '.jpg') }}"
                        class="h-[100px] w-[100px] rounded-md cursor-pointer border border-red-400 shadow-lg shadow-black transition-transform duration-300 transform hover:scale-90"
                        alt="">
                </div>
            @endforeach
        </section>
    </div>
    <script src="{{ asset('assets/js/belajar_membaca/abjad.js') }}"></script>
@endsection
