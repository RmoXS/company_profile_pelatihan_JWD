@extends('layouts.app')

@section('content')
    <div class='container my-2 p-6 bg-white shadow-md rounded-lg'>
        <h2 class='text-2xl font-bold mb-4'>Kelola Artikel</h2>
        <a href="{{ route('artikel.create') }}"
            class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block'>
            Tambah Artikel
        </a>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-6">
            @foreach ($articles as $article)
                <div class="bg-white rounded-lg shadow hover:shadow-md transition">
                    <div class="p-4">
                        <form action="{{ route('artikel.destroy', $article->id) }}" method="POST"
                            onsubmit="return confirm('Yakin ingin menghapus artikel ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-full flex justify-end text-red-500 hover:underline">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>

                            </button>
                        </form>

                        <img src="{{ asset($article->image) }}" alt="{{ $article->title }}"
                            class="w-full h-48 object-cover rounded-t-lg">
                        <h3 class="text-xl font-semibold mb-2">{{ $article->title }}</h3>
                        {{ Str::limit(strip_tags($article->content), 100) }}
                        <div class="mt-4">
                            <a href="{{ route('artikel.id', $article->id) }}" class="text-blue-500 hover:underline">Lihat
                                Detail
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
