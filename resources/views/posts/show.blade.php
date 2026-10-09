@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <x-alert />

    <article class="max-w-4xl mx-auto bg-white rounded-xl shadow-sm overflow-hidden">
        @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}"
                 alt="{{ $post->title }}"
                 class="w-full max-h-96 object-cover">
        @endif

        <div class="p-8">
            <p class="text-sm text-gray-500 mb-2">
                {{ $post->created_at->format('d M Y, H:i') }}
            </p>

            <h1 class="text-4xl font-bold mb-6">
                {{ $post->title }}
            </h1>

            <div class="text-gray-700 leading-7 whitespace-pre-line">
                {{ $post->body }}
            </div>

            <div class="flex gap-3 mt-8">
                <a href="{{ route('posts.edit', $post) }}"
                   class="bg-yellow-500 text-white px-5 py-3 rounded-lg">
                    Edit
                </a>

                <form method="POST"
                      action="{{ route('posts.destroy', $post) }}"
                      onsubmit="return confirm('Yakin ingin menghapus post ini?')">

                    @csrf
                    @method('DELETE')

                    <button class="bg-red-600 text-white px-5 py-3 rounded-lg">
                        Hapus
                    </button>
                </form>

                <a href="{{ route('posts.index') }}"
                   class="bg-gray-200 px-5 py-3 rounded-lg">
                    Kembali
                </a>
            </div>
        </div>
    </article>
@endsection