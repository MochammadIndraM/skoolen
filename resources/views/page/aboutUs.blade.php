@extends('layout.app')

@section('content')
    <div class="container mx-auto px-4 py-12">
        <div class="bg-white rounded-lg shadow-md p-8">
            <h1 class="text-3xl font-bold mb-6">Tentang Kami</h1>
            <p class="text-lg mb-4">
                Selamat datang di SKOOLEN! Kami adalah platform pendidikan yang bertujuan untuk membuat proses belajar
                menjadi lebih menyenangkan dan efektif bagi semua siswa. Dengan berbagai materi pelajaran yang interaktif
                dan menarik, kami berkomitmen untuk membantu setiap siswa mencapai potensi penuh mereka.
            </p>
            <h2 class="text-2xl font-semibold mt-8 mb-4">Misi Kami</h2>
            <p class="text-lg mb-4">
                Misi kami adalah untuk menyediakan sumber belajar berkualitas tinggi yang dapat diakses oleh semua orang, di
                mana saja. Kami percaya bahwa pendidikan adalah kunci untuk masa depan yang lebih baik, dan kami berusaha
                untuk membuatnya lebih inklusif dan tersedia bagi semua kalangan.
            </p>
            <h2 class="text-2xl font-semibold mt-8 mb-4">Tim Kami</h2>
            <p class="text-lg mb-4">
                Kami terdiri dari tim yang berdedikasi dan bersemangat untuk pendidikan. Dengan latar belakang di bidang
                pendidikan, teknologi, dan desain, kami bekerja sama untuk menciptakan platform yang intuitif dan ramah
                pengguna. Kami selalu berusaha untuk berinovasi dan meningkatkan layanan kami untuk memberikan pengalaman
                belajar terbaik bagi para pengguna.
            </p>
            <div class="flex flex-wrap -mx-4 mt-8">
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <img src="{{ asset('assets/img/profile/indra.jpg') }}" alt="Team Member 1"
                        class="rounded-full h-48 w-48 mx-auto mb-4">
                    <h3 class="text-xl font-semibold text-center">Mochammad Indra Maulidana</h3>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <img src="{{ asset('assets/img/profile/arya.jpg') }}" alt="Team Member 2"
                        class="rounded-full h-48 w-48 mx-auto mb-4">
                    <h3 class="text-xl font-semibold text-center">Muhammad Arya Fathorozi</h3>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <img src="{{ asset('assets/img/profile/sabila.jpg') }}" alt="Team Member 3"
                        class="rounded-full h-48 w-48 mx-auto mb-4">
                    <h3 class="text-xl font-semibold text-center">Sabila Risqi Andrian</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
