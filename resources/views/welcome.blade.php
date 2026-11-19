<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 text-slate-100 antialiased">
    <div class="relative min-h-screen overflow-hidden">
        <div class="absolute -top-40 left-1/2 h-[28rem] w-[28rem] -translate-x-1/2 rounded-full bg-violet-600/30 blur-3xl"></div>

        <header class="relative mx-auto flex max-w-6xl items-center justify-between px-6 py-6">
            <span class="text-xl font-extrabold tracking-widest">ESPORTS<span class="text-violet-500">HUB</span></span>
            <nav class="flex items-center gap-3 text-sm">
                @auth
                    <a href="{{ route('gamers.index') }}" class="rounded-lg bg-violet-600 px-4 py-2 font-semibold hover:bg-violet-500">Open app</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="rounded-lg border border-white/15 px-4 py-2 hover:bg-white/5">Log out</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="rounded-lg border border-white/15 px-4 py-2 hover:bg-white/5">Log in</a>
                    <a href="{{ route('register') }}" class="rounded-lg bg-violet-600 px-4 py-2 font-semibold hover:bg-violet-500">Register</a>
                @endauth
            </nav>
        </header>

        <main class="relative mx-auto flex max-w-3xl flex-col items-center px-6 pt-24 text-center">
            <span class="mb-4 rounded-full border border-violet-500/40 bg-violet-500/10 px-4 py-1 text-xs uppercase tracking-widest text-violet-300">Esports management</span>
            <h1 class="text-5xl font-extrabold leading-tight sm:text-6xl">
                Manage your <span class="bg-gradient-to-r from-violet-400 to-cyan-400 bg-clip-text text-transparent">gamers</span> in one place
            </h1>
            <p class="mt-6 max-w-xl text-slate-400">Create an account, log in, and keep track of every player on your roster.</p>

            <div class="mt-10">
                @auth
                    <a href="{{ route('gamers.index') }}" class="rounded-lg bg-violet-600 px-8 py-3 font-semibold hover:bg-violet-500">Go to Gamers</a>
                @else
                    <a href="{{ route('register') }}" class="rounded-lg bg-violet-600 px-8 py-3 font-semibold hover:bg-violet-500">Get started</a>
                @endauth
            </div>
        </main>
    </div>
</body>
</html>