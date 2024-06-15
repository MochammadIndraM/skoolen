@extends('page.Admin.app')


@section('content')
    {{-- <h1>{{ auth()->user()->role }}</h1> --}}

    <div class="flex flex-row flex-wrap justify-center items-center">
        <section class="rounded-md sm:w-2/4 w-full md:w-1/2 lg:w-1/3 px-4 py-4">
            <a href="{{ route('Admin.fitur-hewan') }}"
                class="bg-[#FF5580] w-full h-[300px] lg:h-[330px] rounded-3xl flex flex-col items-center pt-[42px] hover:bg-[#ff7a9b]">
                <img src="{{ asset('assets/icon/burung.png') }}"
                    class="h-[120px] w-[120px] md:h-[140px] md:w-[140px] lg:h-[160px] lg:w-[160px] " alt="">
                <p class="text-[#FFFF80] text-[34px] md:text-[44px] lg:text-[54px] pt-[20px]">Hewan</p>
            </a>
        </section>
        <section class="rounded-md sm:w-2/4 w-full md:w-1/2 lg:w-1/3 px-4 py-4">
            <a href="{{ route('Admin.fitur-tumbuhan') }}"
                class="bg-[#03AED2] w-full h-[300px] lg:h-[330px] rounded-3xl flex flex-col items-center pt-[42px] hover:bg-[#4ccae3]">
                <img src="{{ asset('assets/icon/tumbuhan.png') }}"
                    class="h-[120px] w-[120px] md:h-[140px] md:w-[140px] lg:h-[160px] lg:w-[160px] " alt="">
                <p class="text-[#C3FF93] text-[34px] md:text-[44px] lg:text-[54px] pt-[20px]">Tumbuhan</p>
            </a>
        </section>
        <section class="rounded-md sm:w-2/4 w-full md:w-1/2 lg:w-1/3 px-4 py-4">
            <a href="{{ route('Admin.fitur-cuaca') }}"
                class="bg-[#FFFF80] w-full h-[300px] lg:h-[330px] rounded-3xl flex flex-col items-center pt-[42px] hover:bg-[#fcfc99]">
                <img src="{{ asset('assets/icon/cuaca.png') }}"
                    class="h-[120px] w-[120px] md:h-[140px] md:w-[140px] lg:h-[160px] lg:w-[160px] " alt="">
                <p class="text-[#FF70AB] text-[34px] md:text-[44px] lg:text-[54px] pt-[20px]">Cuaca</p>
            </a>
        </section>
        <section class="rounded-md sm:w-2/4 w-full md:w-1/2 lg:w-1/3 px-4 py-4">
            <a href="{{ route('Admin.fitur-langit') }}"
                class="bg-[#FFAF61] w-full h-[300px] lg:h-[330px] rounded-3xl flex flex-col items-center pt-[42px] hover:bg-[#fcb875]">
                <img src="{{ asset('assets/icon/langit.png') }}"
                    class="h-[120px] w-[120px] md:h-[140px] md:w-[140px] lg:h-[160px] lg:w-[160px] " alt="">
                <p class="text-[#68D2E8] text-[34px] md:text-[44px] lg:text-[54px] pt-[20px]">Langit</p>
            </a>
        </section>
    </div>
@endsection
