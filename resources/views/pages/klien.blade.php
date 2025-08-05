@extends('layouts.app')

@section('content')
    <div class="m-2 p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-3xl font-bold mb-4">Foto Klien Kami</h2>
        <p class="text-gray-700 mb-4">Selamat datang di halaman Foto Klien Kami! Di sini Anda dapat menemukan berbagai
            foto klien yang telah bekerja sama dengan kami.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Klien 1 -->
            <div class="bg-white rounded-lg shadow hover:shadow-md transition">
                <img src="{{ asset('images/klien1.jpg') }}" alt="Klien 1" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">SDN Tempursari</h3>
                    <p class="text-gray-600">Sekolah dasar yang berada di daerah Tempursari yang telah bekerja sama dengan
                        kami dalam pembuatan seragam batik.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow hover:shadow-md transition">
                <img src="{{ asset('images/klien2.jpg') }}" alt="Klien 2" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">SDN Umbulharjo</h3>
                    <p class="text-gray-600">Sekolah dasar yang berada di daerah Umbulharjo yang telah bekerja sama dengan
                        kami dalam pembuatan seragam olahraga.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow hover:shadow-md transition">
                <img src="{{ asset('images/klien3.jpg') }}" alt="Klien 3" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Jogja Airport Resto</h3>
                    <p class="text-gray-600">Restoran yang berada di area Bandara Jogja yang telah bekerja sama dengan kami
                        dalam pembuatan seragam karyawan.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
