@extends('layout.app')

@section('content')
    <div class="title flex justify-center">
        <h2
            class="text-2xl text-[#FF70AB] mt-10 text-justify border-b-4 border-red-300 pb-1 px-4 rounded-md flex justify-center">
            Mari Kita Belajar Tentang Habitat Makhluk Hidup
        </h2>
    </div>
    <section class="flex justify-center">
        <div class="bg-orange-200 w-[700px] h-[400px] flex justify-center items-center mx-8 my-8">
            <iframe id="videoFrame" width="100%" height="100%"
                src="https://www.youtube.com/embed/ZgvAaTZdpLo?autoplay=1&modestbranding=1&showinfo=0&rel=0&iv_load_policy=3"
                frameborder="0" allowfullscreen></iframe>
        </div>
    </section>
    <section class="flex justify-center items-center">
        <div class="bg-green-300 rounded-md w-full max-w-4xl p-4">
            <div class="flex flex-row flex-wrap justify-center items-center">
                <a class="habitat bg-red-400 text-[#C3FF93] rounded-md m-[10px] h-[160px] w-[150px] cursor-pointer hover:bg-red-300"
                    data-video-id="ZgvAaTZdpLo">
                    <div class="img-pegunungan h-1/2 flex justify-center mt-[5px]">
                        <img src="{{ asset('assets/img/sains/habitat/pegunungan.png') }}" class="h-[100%]" alt="">
                    </div>
                    <h1 class="text-center mt-[20px] text-2xl">pegunungan</h1>
                </a>
                <a class="habitat bg-blue-400 text-[#FF70AB] rounded-md m-[10px] h-[160px] w-[150px] cursor-pointer hover:bg-blue-300"
                    data-video-id="cMBDfInvrjE">
                    <div class="img-gurun h-1/2 flex justify-center mt-[5px]">
                        <img src="{{ asset('assets/img/sains/habitat/gurun.png') }}" class="h-[100%]" alt="">
                    </div>
                    <h1 class="text-center mt-[20px] text-2xl">gurun</h1>
                </a>
                <a class="habitat bg-red-400 text-[#C3FF93] rounded-md m-[10px] h-[160px] w-[150px] cursor-pointer hover:bg-red-300"
                    data-video-id="1_gS8eWsWlQ">
                    <div class="img-hutan h-1/2 flex justify-center mt-[5px]">
                        <img src="{{ asset('assets/img/sains/habitat/hutan.png') }}" class="h-[100%]" alt="">
                    </div>
                    <h1 class="text-center mt-[20px] text-2xl">hutan</h1>
                </a>
                <a class="habitat bg-blue-400 text-[#FF70AB] rounded-md m-[10px] h-[160px] w-[150px] cursor-pointer hover:bg-blue-300"
                    data-video-id="eSIAlVyq0YQ">
                    <div class="img-laut h-1/2 flex justify-center mt-[5px]">
                        <img src="{{ asset('assets/img/sains/habitat/laut.png') }}" class="h-[100%]" alt="">
                    </div>
                    <h1 class="text-center mt-[20px] text-2xl">perairan laut</h1>
                </a>
                <a class="habitat bg-red-400 text-[#C3FF93] rounded-md m-[10px] h-[160px] w-[150px] cursor-pointer hover:bg-red-300"
                    data-video-id="myNdLYOlYww">
                    <div class="img-muara h-1/2 flex justify-center mt-[5px]">
                        <img src="{{ asset('assets/img/sains/habitat/muara.png') }}" class="h-[100%]" alt="">
                    </div>
                    <h1 class="text-center mt-[20px] text-2xl">muara</h1>
                </a>
            </div>
        </div>
    </section>
    <script>
        document.querySelectorAll('.habitat').forEach(item => {
            item.addEventListener('click', event => {
                event.preventDefault();
                const videoId = item.getAttribute('data-video-id');
                const iframe = document.getElementById('videoFrame');
                iframe.src =
                    `https://www.youtube.com/embed/${videoId}?autoplay=1&modestbranding=1&showinfo=0&rel=0&iv_load_policy=3`;
            });
        });
    </script>
@endsection
