@if (session('success'))
    <div class="mb-6 rounded-lg bg-green-100 border border-green-300 text-green-700 px-4 py-3">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="mb-6 rounded-lg bg-red-100 border border-red-300 text-red-700 px-4 py-3">
        {{ session('error') }}
    </div>
@endif