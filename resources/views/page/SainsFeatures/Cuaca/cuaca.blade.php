@extends('layout.app')

@section('content')
    <div class="flex justify-center items-center pt-[36px] flex-col">
        <p class="text-[#FF70AB] text-[40px] flex justify-center pb-[30px]">Ayo Belajar Cuaca</p>
        <div class="flex flex-row flex-wrap justify-center items-center max-w-[1200px]">
            @foreach ($listCuaca as $cuaca)
                @php
                    switch (strtolower($cuaca->nama_cuaca)) {
                        case 'pelangi':
                            $textColor = '#ED9898';
                            break;
                        case 'hujan':
                            $textColor = '#5578F3';
                            break;
                        case 'petir':
                            $textColor = '#FFCE4F';
                            break;
                        case 'dingin':
                            $textColor = '#F35555';
                            break;
                        case 'panas':
                            $textColor = '#F00000';
                            break;
                        case 'mendung':
                            $textColor = '#5E6786';
                            break;
                        case 'berangin':
                            $textColor = '#55CDF3';
                            break;
                        default:
                            $textColor = '#FFFF80'; // Default color if not matched
                            break;
                    }
                @endphp
                <div class="w-1/2 md:w-1/3 lg:w-[300px] px-8 py-8 flex justify-center">
                    <a href="{{ route('cuaca.show', $cuaca->slug) }}"
                        class="bg-[#FFFF] w-[300px] h-[300px] rounded-3xl flex flex-col items-center border-[5px] border-[#98A2FF]">
                        {{-- <img src="{{ asset('assets/icon/' . $cuaca->icon) }}" class="h-[180px] w-[180px]"
                            alt="{{ $cuaca->nama_cuaca }}"> --}}
                        @if (file_exists(public_path('assets/icon/' . $cuaca->icon)))
                            <img class="h-[180px] w-[180px]" src="{{ asset('assets/icon/' . $cuaca->icon) }}"
                                alt="{{ $cuaca->icon }}">
                        @else
                            <img class="h-[180px] w-[180px]" src="{{ asset('/storage/' . $cuaca->icon) }}" alt="">
                        @endif
                        <p class="text-[34px] md:text-[40px] lg:text-[40px]" style="color: {{ $textColor }};">
                            {{ strtoupper($cuaca->nama_cuaca) }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
