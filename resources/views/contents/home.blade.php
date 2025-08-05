@extends('layouts.app')

@section('content')
    <div class="relative h-[71vh] flex items-center ml-24">
        <!-- Gambar latar belakang -->
        <img src="{{ asset('images/bg-1.png') }}" alt="Background Pattern"
            class="absolute right-0 top-1/2 -translate-y-1/2 w-[50%] z-0 opacity-30 pointer-events-none select-none" />

        <!-- Teks di atas gambar -->
        <div class="z-10 flex flex-col justify-center">
            <h3 class="text-7xl font-bold">
                Jahit Pakaian
                <br>
                <span class="text-[#483939]">Berkualitas</span>
            </h3>
            <p class="text-2xl mt-4">Apapun kebutuhan pakaian anda, pakai jasa kami saja</p>
        </div>
    </div>

    <span class="absolute bottom-2 right-2">
        Design by Kharis
    </span>
@endsection
