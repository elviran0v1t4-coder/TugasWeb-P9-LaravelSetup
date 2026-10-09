<div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition">
    @if ($post->image)
        <img src="{{ asset('storage/' . $post->image) }}"
             alt="{{ $post->title }}"
             class="w-full h-48 object-cover">
    @else
        <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">
            Tidak ada gambar
        </div>
    @endif

    <div class="p-5">
        <h2 class="text-xl font-bold mb-2">{{ $post->title }}</h2>

        <p class="text-gray-600 mb-4">
            {{ Str::limit($post->body, 120) }}
        </p>

        <a href="{{ route('posts.show', $post) }}"
           class="text-blue-600 font-semibold hover:underline">
            Baca selengkapnya →
        </a>
    </div>
</div>