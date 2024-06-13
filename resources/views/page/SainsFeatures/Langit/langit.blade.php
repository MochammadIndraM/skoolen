@extends('layout.app')

@section('content')
    <div class="flex justify-center items-center pt-[36px] flex-col">
        <p class="text-[#FF70AB] text-[40px] flex justify-center pb-[30px]">Ayo Belajar Langit</p>
        <div class="flex flex-row flex-wrap justify-center items-center max-w-[1200px]">
            @foreach ($listLangit as $langit)
                <div class="w-1/2 md:w-1/3 lg:w-[400px] px-8 py-8 flex justify-center">
                    <a href="{{ route('langit.show', $langit->slug) }}"
                        class="bg-transparent w-[300px] h-[300px] rounded-3xl flex flex-col items-center border-[5px] border-[#98A2FF]">
                        <img src="{{ asset('assets/icon/' . $langit->icon) }}" class="h-[180px] w-[180px]"
                            alt="{{ $langit->list_langit }}">
                        <div class="flex-grow flex flex-col justify-end w-full">
                            <div class="bg-[#211059] w-full flex justify-center items-center h-[70px] rounded-3xl">
                                <p class="text-[34px] md:text-[40px] lg:text-[40px] text-white">
                                    {{ strtoupper($langit->list_langit) }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
