@extends('layouts.app')

@section('content')
    <div class="m-2 p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-3xl font-bold mb-4">Event Galeri</h2>
        <p class="text-gray-700 mb-4">Selamat datang di halaman Event Galeri kami! Di sini Anda dapat menemukan berbagai
            acara yang telah kami selenggarakan, termasuk foto-foto dan informasi terkait.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Event 1 -->
            <div class="bg-white rounded-lg shadow hover:shadow-md transition">
                <img src="{{ asset('images/kegiatan1.jpg') }}" alt="Event 1" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Menjahit Pakaian</h3>
                    <p class="text-gray-600">Salah satu karyawan yang sedang menjahit seragam sekolah.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow hover:shadow-md transition">
                <img src="{{ asset('images/kegiatan2.jpg') }}" alt="Event 2" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Memotong kain</h3>
                    <p class="text-gray-600">Seorang karyawan yang sedang memotong kain untuk pakaian.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow hover:shadow-md transition">
                <img src="{{ asset('images/kegiatan3.jpg') }}" alt="Event 3" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Menjahit kemeja</h3>
                    <p class="text-gray-600">Seorang karyawan yang sedang menjahit kemeja.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
