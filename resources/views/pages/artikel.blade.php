@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto py-10 px-6">
        <img src="{{ asset($article->image) }}" alt="{{ $article->title }}" class="w-full h-48 object-cover rounded-lg mb-6">
        <h1 class="text-4xl font-bold mb-4">{{ $article->title }}</h1>

        <article class="prose">
            {!! $article->content !!}
        </article>

        <p class="mt-6 text-sm text-gray-500">
            Dipublikasikan pada: {{ \Carbon\Carbon::parse($article->published_at)->format('d M Y') }}
        </p>
    </div>
@endsection
