@extends('layout.app')

@section('content')
    <div class="flex justify-center items-center pt-[36px] flex-col">
        <p class="text-[#FF70AB] text-[40px] flex justify-center pb-[30px]">Kategori Hewan</p>
        <div class="flex flex-row flex-wrap justify-center items-center">
            @foreach($categories as $category)
                @php
                    $bgColor = '';
                    $hoverColor = '';
                    $textColor = '';
                    switch($category->kategori_hewan) {
                        case 'Amfibi':
                            $bgColor = '#FF5580';
                            $hoverColor = '#ff7a9b';
                            $textColor = '#FFFF80';
                            break;
                        case 'Ikan':
                            $bgColor = '#C3FF93';
                            $hoverColor = '#d3ffb0';
                            $textColor = '#03AED2';
                            break;
                        case 'Burung':
                            $bgColor = '#FFAA80';
                            $hoverColor = '#ffb794';
                            $textColor = '#FF0080';
                            break;
                        case 'Reptil':
                            $bgColor = '#FFFF80';
                            $hoverColor = '#fcfc99';
                            $textColor = '#FF70AB';
                            break;
                        case 'Mamalia':
                            $bgColor = '#FFAF61';
                            $hoverColor = '#fcb875';
                            $textColor = '#C3FF93';
                            break;
                    }
                @endphp
                <div class="w-full md:w-1/2 lg:w-1/3 px-8 py-8">
                    <a href="{{ route('sainsFeatures.listHewan', $category->slug) }}"
                        class="w-full h-[300px] lg:h-[330px] rounded-3xl flex flex-col items-center pt-[42px]"
                        style="background-color: {{ $bgColor }}; hover:bg: {{ $hoverColor }};">
                        <img src="/assets/icon/{{ $category->gambar }}"
                            class="h-[120px] w-[120px] md:h-[140px] md:w-[140px] lg:h-[160px] lg:w-[160px]" alt="">
                        <p class="text-[34px] md:text-[44px] lg:text-[54px] pt-[20px]" style="color: {{ $textColor }};">{{ $category->kategori_hewan }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
