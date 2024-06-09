@extends('layout.app')

@section('content')
    <div class="flex justify-center items-center pt-[36px] flex-col">
        <p class="text-[#FF70AB] text-[40px] flex justify-center pb-[30px]">{{ $hewan->nama_hewan }}</p>
        <div class="w-full max-w-[800px] px-8 py-8">
            <div class="bg-[#FF5580] w-full rounded-3xl flex flex-col items-center">
                <div class="w-full overflow-hidden rounded-t-3xl">
                    <img src="/assets/img/sains/hewan/{{ $hewan->gambar }}"
                        class="w-full h-[300px] md:h-[400px] lg:h-[500px] object-cover" alt="{{ $hewan->nama_hewan }}">
                </div>
                <div class="p-8">
                    <p class="text-[#FFFF80] text-[24px] md:text-[34px] lg:text-[44px]">{{ $hewan->nama_hewan }}</p>
                    <p class="text-[#FFFFFF] text-[16px] md:text-[18px] lg:text-[20px] mt-4">{{ $hewan->deskripsi }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
