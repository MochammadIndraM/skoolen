@extends('layout.app')

@section('content')
    <div class="flex justify-center items-center pt-[36px] flex-col">
        <p class="text-[#FF70AB] text-[40px] flex justify-center pb-[30px]">List Hewan</p>
        <div class="flex flex-row flex-wrap justify-center items-center max-w-[1400px]">
            @foreach ($hewan->hewan as $item)
                <div class="w-full md:w-1/2 lg:w-1/3 px-8 py-8">
                    <a href="{{ route('sainsFeatures.detailHewan', $item->nama_hewan) }}"
                        class="bg-[#FF5580] w-full h-[300px] lg:h-[500px] rounded-3xl flex flex-col items-center">
                        <div class="w-full overflow-hidden rounded-t-3xl">
                            @if (file_exists(public_path('assets/img/sains/hewan/' . $item->gambar)))
                                <img class="w-full h-[200px] md:h-[300px] lg:h-[400px] object-cover"
                                    src="{{ asset('assets/img/sains/hewan/' . $item->gambar) }}" alt="{{ $item->gambar }}">
                            @else
                                <img class="w-full h-[200px] md:h-[300px] lg:h-[400px] object-cover"
                                    src="{{ asset('/storage/' . $item->gambar) }}" alt="">
                            @endif
                        </div>
                        <p class="text-[#FFFF80] text-[34px] md:text-[44px] lg:text-[54px] pt-[20px]">
                            {{ $item->nama_hewan }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
