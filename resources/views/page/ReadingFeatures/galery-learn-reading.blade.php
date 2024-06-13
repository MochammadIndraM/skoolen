@extends('layout.app')

@section('content')
    <div class="title flex flex-col items-center justify-center ">
        <h2 class="text-2xl mt-10 text-justify border-b-4 border-red-300 pb-1 px-4 rounded-md">Mari Kita Belajar
            Membaca Dengan Video
        </h2>
        <a href="{{ route('readingFeatures.LearnReading') }}">
            <div
                class="bg-blue-300 mt-[10px] px-[20px] py-[10px] rounded-lg cursor-pointer border-red-400 shadow-lg shadow-black transition-transform duration-300 transform hover:scale-95">
                <h1>kembali ke belajar huruf</h1>
            </div>
        </a>
    </div>
    <div class="detail-video mt-[20px] ">
        <section class="flex flex-wrap justify-center sm:flex-auto ">
            <div
                class="bg-red-400 flex flex-col items-center mx-[2px]  mt-[10px] w-[80%] h-[300px] rounded-lg sm:w-[45%] lg:w-[30%] lg:h-[300px]">
                <video class="p-[10px] w-full h-[200px] rounded-md md:p-[5px]"
                    poster="https://img.youtube.com/vi/-_3dgN-NVMg/maxresdefault.jpg">
                </video>
                <div
                    class="play-container bg-blue-300 w-[50%] mt-[10px] px-[20px] py-[10px] rounded-lg cursor-pointer border-red-400 shadow-lg shadow-black transition-transform duration-300 transform hover:scale-95">
                    <h1 class="text-center">play</h1>
                    <iframe class="frame-yt hidden w-full h-full"
                        src="https://www.youtube.com/embed/-_3dgN-NVMg?rel=0&ZufWPGGinrJzUAdP" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div
                class="bg-red-400 flex flex-col items-center mx-[2px]  mt-[10px] w-[80%] h-[300px] rounded-lg sm:w-[45%] lg:w-[30%] lg:h-[300px]">
                <video class="p-[5px] w-full h-[200px] rounded-md"
                    poster="https://img.youtube.com/vi/ND1QoJQAmyM/maxresdefault.jpg">
                </video>
                <div
                    class="play-container bg-blue-300 w-[50%] mt-[10px] px-[20px] py-[10px] rounded-lg cursor-pointer border-red-400 shadow-lg shadow-black transition-transform duration-300 transform hover:scale-95">
                    <h1 class="text-center">play</h1>
                    <iframe class="frame-yt hidden w-full h-full"
                        src="https://www.youtube.com/embed/ND1QoJQAmyM?si=SqpytHUiyDixqqpB" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </section>
    </div>
    <div id="showVideo" class=" hidden fixed inset-0 bg-black bg-opacity-75 z-[20] items-center justify-center modal">
        <button class="button-close absolute top-2 right-2 text-white text-3xl">&times;</button>
        <div
            class="content-yt bg-white rounded-lg overflow-hidden relative w-[90%] h-[45%] sm:h-[60%] md:w-[70%] md:h-[70%] lg:h-[85%]">
        </div>
    </div>
    <script src="{{ asset('assets/js/belajar_membaca/galery.js') }}"></script>
@endsection
