<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chirper - Tugas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 antialiased">

    <nav class="p-6 flex justify-between items-center max-w-7xl mx-auto">
        <div class="flex items-center gap-2 font-bold text-xl text-gray-800">
            <span class="text-red-500">🐦</span> Chirper
        </div>
        <div class="space-x-4">
            <a href="/login" class="text-gray-600 font-semibold hover:underline">Sign In</a>
            <a href="/register" class="bg-black text-white px-4 py-2 rounded-lg font-semibold shadow-md">Sign Up</a>
        </div>
    </nav>

    <div class="max-w-2xl mx-auto mt-10 px-4">
        
        <h1 class="text-3xl font-bold mb-6 text-center">
            Welcome to Chirper!
        </h1>

        @foreach ($chirps as $chirp)
            <div class="bg-white shadow-md rounded-xl p-4 mb-4">
                <div class="font-bold">{{ $chirp['author'] }}</div>
                <div class="mt-1">{{ $chirp['message'] }}</div>
                <div class="text-sm text-gray-500 mt-2">{{ $chirp['time'] }}</div>
            </div>
        @endforeach

    </div>

    <footer class="fixed bottom-10 left-0 right-0 flex justify-center">
        <div class="border-2 border-red-600 px-6 py-2 rounded-full text-sm font-bold text-gray-700 bg-white shadow-sm">
            © 2026 Chirper - Built with Laravel and ❤️ by Afni Zahara (240170046)
        </div>
    </footer>

</body>
</html>