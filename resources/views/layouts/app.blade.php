<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lestari Tailor</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-200 text-gray-900 m-0 p-0 min-h-screen flex flex-col">

    <main class="flex flex-1 w-full">
        {{-- Sidebar --}}
        <aside class="w-1/4 bg-[#BF8F62] p-4">
            <div class="text-center mb-4">
                <img src="/images/logo.png" alt="Logo" class="w-24 h-24 mx-auto">
            </div>
            <nav>
                <ul class="space-y-2">
                    <li><a href="/" class="text-white hover:underline font-semibold text-xl">Home</a></li>

                    {{-- Dropdown Artikel --}}
                    <li>
                        <div class="peer relative">
                            <input type="checkbox" class="hidden peer" id="artikel-toggle">
                            <label for="artikel-toggle"
                                class="flex justify-between items-center py-2 pr-2 text-white font-semibold text-xl cursor-pointer">
                                Artikel <span>▼</span>
                            </label>
                            <ul class="hidden peer-checked:block bg-[#BF8F62] p-2 space-y-2">
                                @foreach ($articles ?? [] as $article)
                                    @if (is_object($article))
                                        <li>
                                            <a href="{{ route('artikel.id', $article->id) }}"
                                                class="text-white hover:underline font-semibold text-xl">
                                                {{ $article->title }}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </li>

                    <li><a href="/event" class="text-white hover:underline font-semibold text-xl">Event Galeri</a></li>
                    <li><a href="/foto-klien" class="text-white hover:underline font-semibold text-xl">Foto Klien</a>
                    </li>

                    @guest
                        <li><a href="/login" class="text-white hover:underline font-semibold text-xl">Sign In</a></li>
                        <li><a href="/sign-up" class="text-white hover:underline font-semibold text-xl">Sign Up</a></li>
                    @endguest

                    @auth
                        @if (auth()->user()->name == 'admin')
                            {{-- Admin Dropdown --}}
                            <li>
                                <div class="peer relative">
                                    <input type="checkbox" class="hidden peer" id="admin-toggle">
                                    <label for="admin-toggle"
                                        class="flex justify-between items-center py-2 pr-2 text-white font-semibold text-xl cursor-pointer">
                                        Admin <span>▼</span>
                                    </label>
                                    <ul class="hidden peer-checked:block bg-[#BF8F62] p-2 space-y-2">
                                        <li><a href="/admin" class="text-white hover:underline text-xl">Dashboard</a></li>
                                        <li><a href="/admin/kelola-produk" class="text-white hover:underline text-xl">Kelola
                                                Produk</a></li>
                                        <li><a href="/admin/kelola-artikel"
                                                class="text-white hover:underline text-xl">Kelola Artikel</a></li>
                                    </ul>
                                </div>
                            </li>
                        @endif

                        {{-- Logout --}}
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="text-white hover:underline font-semibold text-xl">Logout</button>
                            </form>
                        </li>
                    @endauth
                </ul>
            </nav>
        </aside>

        {{-- Content --}}
        <section class="w-3/4 flex flex-col">
            <header class="p-4 text-center">
                <h1 class="text-4xl font-bold text-[#656565]">Lestari Tailor</h1>
            </header>

            <nav class="bg-white p-4">
                <ul class="flex justify-center items-center space-x-4">
                    <li><a href="/profile" class="text-blue-600 hover:underline">Profile</a></li>
                    <li><a href="/visi-misi" class="text-blue-600 hover:underline">Visi & Misi</a></li>
                    <li><a href="/produk" class="text-blue-600 hover:underline">Produk Kami</a></li>
                    <li><a href="/contact" class="text-blue-600 hover:underline">Kontak</a></li>
                    <li><a href="/about" class="text-blue-600 hover:underline">Tentang Kami</a></li>
                </ul>
            </nav>

            {{-- Halaman Konten --}}
            <div class="flex-1 p-6">
                @yield('content')
            </div>
        </section>
    </main>
</body>

</html>
