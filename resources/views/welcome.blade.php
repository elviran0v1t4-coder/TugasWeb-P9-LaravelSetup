<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project | Tugas P9</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen">
    <div class="max-w-5xl mx-auto px-5 py-10">
        <nav class="flex items-center justify-between bg-white rounded-2xl px-6 py-4 shadow-sm">
            <h2 class="font-bold text-xl text-slate-800">My Laravel Project</h2>
            <span class="text-sm text-slate-500">Tugas Web P9</span>
        </nav>

        <section class="bg-slate-800 text-white rounded-3xl mt-6 px-7 py-12 md:p-14">
            <p class="text-blue-300 font-semibold text-sm">WEB PROGRAMMING</p>
            <h1 class="text-4xl md:text-5xl font-bold mt-3">Belajar Laravel dengan Cara Sederhana.</h1>
            <p class="text-slate-300 mt-4 max-w-2xl">
                Project ini dibuat untuk mencoba routing, controller, model,
                Blade view, database, dan konsep MVC pada Laravel.
            </p>
            <a href="/about" class="inline-block mt-7 bg-blue-500 px-5 py-3 rounded-lg font-medium hover:bg-blue-600 transition">
                Lihat Project
            </a>
        </section>

        <div class="grid md:grid-cols-3 gap-5 mt-6">
            <a href="/about" class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition">
                <span class="text-2xl">📌</span>
                <h3 class="font-bold text-lg text-slate-800 mt-4">About</h3>
                <p class="text-slate-500 text-sm mt-2">Informasi singkat mengenai project dan teknologi yang digunakan.</p>
            </a>

            <a href="/contact" class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition">
                <span class="text-2xl">💬</span>
                <h3 class="font-bold text-lg text-slate-800 mt-4">Contact</h3>
                <p class="text-slate-500 text-sm mt-2">Informasi yang dapat digunakan untuk menghubungi saya.</p>
            </a>

            <a href="/hello/Mahasiswa" class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition">
                <span class="text-2xl">✨</span>
                <h3 class="font-bold text-lg text-slate-800 mt-4">Hello</h3>
                <p class="text-slate-500 text-sm mt-2">Contoh penggunaan route parameter pada Laravel.</p>
            </a>
        </div>

        <p class="text-center text-sm text-slate-400 mt-8">
            Dibuat sebagai bagian dari Tugas Web Pertemuan 9
        </p>
    </div>
</body>
</html>