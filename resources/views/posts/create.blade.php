@extends('layouts.app')

@section('title', 'Tambah Post')

@section('content')
    <div class="max-w-3xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">Tambah Post Baru</h1>

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
              action="{{ route('posts.store') }}"
              enctype="multipart/form-data"
              class="bg-white rounded-xl shadow-sm p-6">

            @csrf

            <div class="mb-5">
                <label class="block font-semibold mb-2">Judul</label>

                <input
                    type="text"
                    name="title"
                    value="{{ old('title') }}"
                    class="w-full border rounded-lg px-4 py-3"
                    placeholder="Masukkan judul post"
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
                    placeholder="Tulis isi post..."
                >{{ old('body') }}</textarea>

                @error('body')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block font-semibold mb-2">Gambar</label>

                <input
                    type="file"
                    name="image"
                    accept="image/*"
                    class="w-full border rounded-lg px-4 py-3"
                >

                <p class="text-sm text-gray-500 mt-1">
                    JPG, JPEG, PNG, atau WEBP. Maksimal 2 MB.
                </p>

                @error('image')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-3">
                <button class="bg-blue-600 text-white px-5 py-3 rounded-lg hover:bg-blue-700">
                    Simpan Post
                </button>

                <a href="{{ route('posts.index') }}"
                   class="bg-gray-200 px-5 py-3 rounded-lg">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection