@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')
    <x-alert />

    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold">Blog Laravel</h1>
            <p class="text-gray-600 mt-1">Kelola artikel dengan Laravel CRUD.</p>
        </div>

        <a href="{{ route('posts.create') }}"
           class="bg-blue-600 text-white px-5 py-3 rounded-lg hover:bg-blue-700">
            + Tambah Post
        </a>
    </div>

    <form method="GET" action="{{ route('posts.index') }}" class="mb-8">
        <div class="flex gap-2">
            <input
                type="text"
                name="q"
                value="{{ $q }}"
                placeholder="Cari judul atau isi post..."
                class="flex-1 border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-400"
            >

            <button class="bg-gray-900 text-white px-5 py-3 rounded-lg">
                Cari
            </button>
        </div>
    </form>

    @if ($posts->count())
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <x-post-card :post="$post" />
            @endforeach
        </div>

        <div class="mt-8">
            {{ $posts->links() }}
        </div>
    @else
        <div class="bg-white rounded-xl p-10 text-center shadow-sm">
            <h2 class="text-xl font-semibold">Belum ada post</h2>
            <p class="text-gray-500 mt-2">
                Silakan tambahkan post pertama kamu.
            </p>
        </div>
    @endif
@endsection