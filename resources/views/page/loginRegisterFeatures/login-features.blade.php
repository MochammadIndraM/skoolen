@extends('layout.app')


@section('content')
    <section class="flex flex-col justify-center items-center h-screen w-screen">
        <form action=""
            class="bg-tranparant w-[95%] mx-[10px] h-[350px] rounded-lg flex flex-col justify-center sm:w-3/4 md:w-1/2 xl:w-[40%] 2xl:w-[30%] 2xl:h-[350px]">
            <div class="flex flex-col justify-center items-center">
                <b class="text-[25px] text-yellow-500">Selamat Datang Di Skoolen</b>
                <span class="text-[20px] text-yellow-400">mari login dan belajar bersama</span>
            </div>
            <div class="flex flex-col justify-center mx-[20px] my-[5px]">
                <label for="username" class="my-[5px] text-[20px] font-bold text-blue-400 tracking-widest">USERNAME</label>
                <input type="text" id="username" name="username" autocomplete="off"
                    class="h-[40px] px-[10px] rounded-lg text-[25px]">
            </div>
            <div class="flex flex-col justify-center mx-[20px] my-[5px]">
                <label for="password" class="my-[5px]  text-[20px] font-bold text-blue-400 tracking-widest">PASSWORD</label>
                <input type="password" id="password" name="password" autocomplete="off"
                    class="h-[40Px] px-[10px] rounded-lg text-[25px]">
            </div>
            <div class="flex justify-center items-center mt-[10px]">
                <button
                    class="bg-green-300 tracking-wider text-green-900 font-bold text-[25px] px-[20px] py-[10px] rounded-lg border border-green-200 shadow-lg shadow-black transition-transform duration-300 transform hover:scale-90">LOGIN</button>

                <a href="" class="mx-[20px] text-[25px] text-red-400">register...?</a>
            </div>
        </form>
    </section>
@endsection
