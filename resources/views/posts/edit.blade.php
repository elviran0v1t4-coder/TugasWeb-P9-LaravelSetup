@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
    <div class="max-w-3xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">Edit Post</h1>

        @if ($errors->any())
            <div class="mb-6 bg-red-100 border border-red-300 text-red-700 rounded-lg p-4">
                <p class="font-semibold mb-2">Ada data yang perlu diperbaiki:</p>

                <ul class="list-disc ml-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST"
              action="{{ route('posts.update', $post) }}"
              enctype="multipart/form-data"
              class="bg-white rounded-xl shadow-sm p-6">

            @csrf
            @method('PUT')

            <div class="mb-5">
                <label class="block font-semibold mb-2">Judul</label>

                <input
                    type="text"
                    name="title"
                    value="{{ old('title', $post->title) }}"
                    class="w-full border rounded-lg px-4 py-3"
                >

                @error('title')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label class="block font-semibold mb-2">Isi Post</label>

                <textarea
                    name="body"
                    rows="8"
                    class="w-full border rounded-lg px-4 py-3"
                >{{ old('body', $post->body) }}</textarea>

                @error('body')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            @if ($post->image)
                <div class="mb-5">
                    <p class="font-semibold mb-2">Gambar Saat Ini</p>

                    <img src="{{ asset('storage/' . $post->image) }}"
                         alt="{{ $post->title }}"
                         class="w-48 h-32 object-cover rounded-lg">
                </div>
            @endif

            <div class="mb-6">
                <label class="block font-semibold mb-2">Ganti Gambar</label>

                <input
                    type="file"
                    name="image"
                    accept="image/*"
                    class="w-full border rounded-lg px-4 py-3"
                >

                @error('image')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-3">
                <button class="bg-blue-600 text-white px-5 py-3 rounded-lg">
                    Simpan Perubahan
                </button>

                <a href="{{ route('posts.show', $post) }}"
                   class="bg-gray-200 px-5 py-3 rounded-lg">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection