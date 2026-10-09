<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hi | Laravel Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen flex items-center justify-center p-5">
    <div class="bg-white max-w-lg w-full rounded-2xl shadow-lg p-8 text-center">
        <div class="text-4xl">👋</div>
        <p class="text-sm text-blue-600 font-semibold mt-4">ROUTE PARAMETER</p>
        <h1 class="text-3xl font-bold text-slate-800 mt-2">
            Hi, {{ $nama }}!
        </h1>
        <p class="text-slate-500 mt-3">
            Nama ditampilkan berdasarkan parameter dari URL.
        </p>
        <a href="/" class="inline-block mt-7 bg-slate-800 text-white px-5 py-2.5 rounded-lg">
            ← Kembali
        </a>
    </div>
</body>
</html>