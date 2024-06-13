@extends('layout.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="flex flex-col items-center">
            <img src="{{ asset('assets/icon/' . $cuaca->icon) }}" alt="{{ $cuaca->list_cuaca }}" class="h-[180px] w-[180px]">
            <div class="mt-4">
                <iframe width="800" height="400" src="https://www.youtube.com/embed/{{ $cuaca->video_id }}?autoplay=1&mute=1"
                    frameborder="0" allow="autoplay" allowfullscreen></iframe>
            </div>
            <p class="text-lg mt-6 w-[800px] px-6 py-4 bg-white shadow-lg rounded-lg leading-relaxed text-gray-700 text-center">
                {{ $cuaca->deskripsi }}
            </p>
        </div>
    </div>
@endsection