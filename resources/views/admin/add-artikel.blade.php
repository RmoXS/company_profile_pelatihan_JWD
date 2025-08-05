@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-bold mb-4">Tambah Artikel</h2>
        <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Judul Artikel</label>
                <input type="text" name="title" id="title" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="content" class="block text-gray-700">Konten Artikel</label>
                <textarea name="content" id="content" rows="5" class="w-full p-2 border rounded" required></textarea>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-gray-700">Gambar Artikel</label>
                <input type="file" name="image" id="image" class="w-full p-2 border rounded">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" onclick="return confirm('Yakin ingin menambahkan artikel ini?');"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Simpan Artikel
                </button>
            </div>
        </form>
    </div>
@endsection
