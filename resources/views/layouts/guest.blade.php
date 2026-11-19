<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 text-slate-100 antialiased">
    <div class="relative min-h-screen flex items-center justify-center px-4 overflow-hidden">
        <div class="absolute -top-32 -left-32 h-96 w-96 rounded-full bg-violet-600/30 blur-3xl"></div>
        <div class="absolute -bottom-32 -right-32 h-96 w-96 rounded-full bg-cyan-500/20 blur-3xl"></div>

        <div class="relative w-full max-w-md">
            <a href="/" class="block text-center mb-8 text-3xl font-extrabold tracking-widest">
                ESPORTS<span class="text-violet-500">HUB</span>
            </a>
            <div class="rounded-2xl border border-white/10 bg-slate-900/70 p-8 shadow-2xl backdrop-blur">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>
</html>