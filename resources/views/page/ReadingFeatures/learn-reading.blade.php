@extends('layout.app')

@section('content')
    <div class="block sm:flex sm:flex-row-reverse sm:pt-[40px]">
        <section class="pt-[40px] pb-[20px] flex justify-center sm:pt-[0px] sm:items-center sm:w-[40%] lg:w-[30%]">
            <div class="bg-[#65B741] img-abjad p-[5px] w-1/2 sm:w-[70%] h-[230px] rounded-md lg:h-[300px]">
                <div class="img-abjad h-1/2 w-[100%] mb-[20px]">
                    <img src="{{ asset('assets/img/reading-features/deskripsi-abjad/A_ayam.jpg') }}"
                        class="rounded-md w-full h-[130px] lg:h-[200px]" alt="abjad Aa ayam">
                </div>
                <div class="desAbjad-a">
                    <p class="text-4xl text-center text-white pt-[15px] lg:pt-[40px]">Aa</p>
                    <p class="text-2xl text-center text-white">Ayam</p>
                </div>
            </div>
        </section>
        <section class="bg-yellow-100 rounded-md p-[5px] m-[20px] overflow-x-auto sm:hidden">
            <div class="p-[5px]  grid grid-flow-col gap-[10px]" style="grid-auto-columns: max-content">
                <div class="abjad-a">
                    <img src="{{ asset('assets/img/reading-features/abjad/abjad-A.jpg') }}"
                        class="h-[80px] w-[80px] rounded-md cursor-pointer " alt="">
                </div>
                <div class="abjad-b">
                    <img src="{{ asset('assets/img/reading-features/abjad/abjad-B.jpg') }}"
                        class="h-[80px] w-[80px] rounded-md cursor-pointer " alt="">
                </div>
                <div class="abjad-d">
                    <img src="{{ asset('assets/img/reading-features/abjad/abjad-C.jpg') }}"
                        class="h-[80px] w-[80px] rounded-md cursor-pointer " alt="">
                </div>
                <div class="abjad-e">
                    <img src="{{ asset('assets/img/reading-features/abjad/abjad-D.jpg') }}"
                        class="h-[80px] w-[80px] rounded-md cursor-pointer " alt="">
                </div>
                <div class="abjad-f">
                    <img src="{{ asset('assets/img/reading-features/abjad/abjad-E.jpg') }}"
                        class="h-[80px] w-[80px] rounded-md cursor-pointer " alt="">
                </div>
                <div class="abjad-g">
                    <img src="{{ asset('assets/img/reading-features/abjad/abjad-F.jpg') }}"
                        class="h-[80px] w-[80px] rounded-md cursor-pointer " alt="">
                </div>
                <div class="abjad-h">
                    <img src="{{ asset('assets/img/reading-features/abjad/abjad-G.jpg') }}"
                        class="h-[80px] w-[80px] rounded-md cursor-pointer " alt="">
                </div>
                <div class="abjad-i">
                    <img src="{{ asset('assets/img/reading-features/abjad/abjad-H.jpg') }}"
                        class="h-[80px] w-[80px] rounded-md cursor-pointer " alt="">
                </div>
                <div class="abjad-j">
                    <img src="{{ asset('assets/img/reading-features/abjad/abjad-I.jpg') }}"
                        class="h-[80px] w-[80px] rounded-md cursor-pointer " alt="">
                </div>
            </div>
            <div class="p-[5px]  grid grid-flow-col gap-[10px]" style="grid-auto-columns: max-content">
                <div class="abjad-k">
                    <img src="{{ asset('assets/img/reading-features/abjad/abjad-K.jpg') }}"
                        class="h-[80px] w-[80px] rounded-md cursor-pointer " alt="">
                </div>
                <div class="abjad-l">
                    <img src="{{ asset('assets/img/reading-features/abjad/abjad-L.jpg') }}"
                        class="h-[80px] w-[80px] rounded-md cursor-pointer " alt="">
                </div>
                <div class="abjad-m">
                    <img src="{{ asset('assets/img/reading-features/abjad/abjad-M.jpg') }}"
                        class="h-[80px] w-[80px] rounded-md cursor-pointer " alt="">
                </div>
                <div class="abjad-n">
                    <img src="{{ asset('assets/img/reading-features/abjad/abjad-N.jpg') }}"
                        class="h-[80px] w-[80px] rounded-md cursor-pointer " alt="">
                </div>
                <div class="abjad-o">
                    <img src="{{ asset('assets/img/reading-features/abjad/abjad-O.jpg') }}"
                        class="h-[80px] w-[80px] rounded-md cursor-pointer " alt="">
                </div>
                <div class="abjad-p">
                    <img src="{{ asset('assets/img/reading-features/abjad/abjad-P.jpg') }}"
                        class="h-[80px] w-[80px] rounded-md cursor-pointer " alt="">
                </div>
                <div class="abjad-q">
                    <img src="{{ asset('assets/img/reading-features/abjad/abjad-Q.jpg') }}"
                        class="h-[80px] w-[80px] rounded-md cursor-pointer " alt="">
                </div>
                <div class="abjad-r">
                    <img src="{{ asset('assets/img/reading-features/abjad/abjad-R.jpg') }}"
                        class="h-[80px] w-[80px] rounded-md cursor-pointer " alt="">
                </div>
                <div class="abjad-s">
                    <img src="{{ asset('assets/img/reading-features/abjad/abjad-S.jpg') }}"
                        class="h-[80px] w-[80px] rounded-md cursor-pointer " alt="">
                </div>
            </div>
            <div class="p-[5px]  grid grid-flow-col gap-[10px]" style="grid-auto-columns: max-content">
                <div class="abjad-t">
                    <img src="{{ asset('assets/img/reading-features/abjad/abjad-T.jpg') }}"
                        class="h-[80px] w-[80px] rounded-md cursor-pointer " alt="">
                </div>
                <div class="abjad-u">
                    <img src="{{ asset('assets/img/reading-features/abjad/abjad-U.jpg') }}"
                        class="h-[80px] w-[80px] rounded-md cursor-pointer " alt="">
                </div>
                <div class="abjad-v">
                    <img src="{{ asset('assets/img/reading-features/abjad/abjad-V.jpg') }}"
                        class="h-[80px] w-[80px] rounded-md cursor-pointer " alt="">
                </div>
                <div class="abjad-w">
                    <img src="{{ asset('assets/img/reading-features/abjad/abjad-W.jpg') }}"
                        class="h-[80px] w-[80px] rounded-md cursor-pointer " alt="">
                </div>
                <div class="abjad-x">
                    <img src="{{ asset('assets/img/reading-features/abjad/abjad-X.jpg') }}"
                        class="h-[80px] w-[80px] rounded-md cursor-pointer " alt="">
                </div>
                <div class="abjad-y">
                    <img src="{{ asset('assets/img/reading-features/abjad/abjad-Y.jpg') }}"
                        class="h-[80px] w-[80px] rounded-md cursor-pointer " alt="">
                </div>
                <div class="abjad-z">
                    <img src="{{ asset('assets/img/reading-features/abjad/abjad-Z.jpg') }}"
                        class="h-[80px] w-[80px] rounded-md cursor-pointer " alt="">
                </div>
            </div>
        </section>
        <section
            class="hidden sm:bg-yellow-100 sm:rounded-md sm:w-[60%] sm:h-[400px] sm:m-[20px] sm:overflow-y-auto sm:flex sm:flex-wrap sm:justify-center lg:w-[70%]">
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-A.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer" alt="">
            </div>
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-B.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer " alt="">
            </div>
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-C.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer " alt="">
            </div>
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-D.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer " alt="">
            </div>
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-E.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer " alt="">
            </div>
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-F.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer " alt="">
            </div>
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-G.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer " alt="">
            </div>
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-H.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer " alt="">
            </div>
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-I.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer " alt="">
            </div>
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-J.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer " alt="">
            </div>
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-K.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer " alt="">
            </div>
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-L.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer " alt="">
            </div>
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-M.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer " alt="">
            </div>
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-N.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer " alt="">
            </div>
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-O.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer " alt="">
            </div>
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-P.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer " alt="">
            </div>
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-Q.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer " alt="">
            </div>
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-R.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer " alt="">
            </div>
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-S.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer " alt="">
            </div>
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-T.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer " alt="">
            </div>
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-U.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer " alt="">
            </div>
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-V.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer " alt="">
            </div>
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-W.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer " alt="">
            </div>
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-X.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer " alt="">
            </div>
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-Y.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer " alt="">
            </div>
            <div class="w-1/3 lg:w-1/4 p-4">
                <img src="{{ asset('assets/img/reading-features/abjad/abjad-Z.jpg') }}"
                    class="h-[100px] w-[100px] rounded-md cursor-pointer " alt="">
            </div>
        </section>
    </div>
@endsection
