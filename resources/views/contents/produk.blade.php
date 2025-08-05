@extends('layouts.app')

@section('content')
    <div class="m-2 p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-4xl font-bold mb-4">🧵 Produk Kami – Lestari Tailor</h1>

        <div class="text-lg">
            <p>
                Di Lestari Tailor, kami menawarkan berbagai produk jahitan berkualitas tinggi yang dirancang untuk memenuhi
                kebutuhan fashion Anda. Berikut adalah beberapa produk unggulan kami:
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-6">
                @foreach ($products as $product)
                    <div class="bg-white rounded-lg shadow hover:shadow-md transition">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}"
                            class="w-full h-48 object-cover rounded-t-lg">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold mb-2">{{ $product->name }}</h3>
                            <p class="text-gray-600">{{ $product->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
