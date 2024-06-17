@extends('layout.app')

@section('content')
    <div class="flex justify-center items-center pt-[36px] flex-col">
        <p class="text-[#FF70AB] text-[40px] flex justify-center pb-[30px]">{{ $tumbuhan->nama_tumbuhan }}</p>
        <div class="w-full max-w-[800px] px-8 py-8">
            <div class="bg-[#FF5580] w-full rounded-3xl flex flex-col items-center">
                <div class="w-full overflow-hidden rounded-t-3xl">
                    @if (file_exists(public_path('assets/img/sains/tumbuhan/' . $tumbuhan->gambar)))
                        <img class="w-full h-[300px] md:h-[400px] lg:h-[500px] object-cover"
                            src="{{ asset('assets/img/sains/tumbuhan/' . $tumbuhan->gambar) }}" alt="{{ $tumbuhan->gambar }}">
                    @else
                        <img class="w-full h-[300px] md:h-[400px] lg:h-[500px] object-cover"
                            src="{{ asset('/storage/' . $tumbuhan->gambar) }}" alt="">
                    @endif
                </div>
                <div class="p-8">
                    <p class="text-[#FFFF80] text-[24px] md:text-[34px] lg:text-[44px]">{{ $tumbuhan->nama_tumbuhan }}</p>
                    <p class="text-[#FFFFFF] text-[16px] md:text-[18px] lg:text-[20px] mt-4">{{ $tumbuhan->deskripsi }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
