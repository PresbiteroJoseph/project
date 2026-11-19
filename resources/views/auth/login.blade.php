<x-guest-layout>
    <h1 class="text-2xl font-bold mb-1">Welcome back</h1>
    <p class="text-slate-400 text-sm mb-6">Log in to manage your gamers.</p>

    @if (session('status'))
        <div class="mb-4 rounded-lg bg-emerald-500/10 border border-emerald-500/30 px-4 py-2 text-sm text-emerald-300">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" x-data="{ submitting: false }" @submit="submitting = true" class="space-y-5">
        @csrf

        <div>
            <label for="email" class="block text-sm text-slate-300 mb-1">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                class="w-full rounded-lg bg-slate-800 border border-slate-700 px-4 py-2.5 text-slate-100 placeholder-slate-500 focus:border-violet-500 focus:ring-violet-500">
            @error('email')
                <p class="mt-2 text-sm text-rose-400">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password" class="block text-sm text-slate-300 mb-1">Password</label>
            <input id="password" type="password" name="password" required
                class="w-full rounded-lg bg-slate-800 border border-slate-700 px-4 py-2.5 text-slate-100 focus:border-violet-500 focus:ring-violet-500">
            @error('password')
                <p class="mt-2 text-sm text-rose-400">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" :disabled="submitting"
            class="w-full rounded-lg bg-violet-600 py-2.5 font-semibold text-white hover:bg-violet-500 transition disabled:opacity-60 disabled:cursor-not-allowed">
            <span x-show="!submitting">Log in</span>
            <span x-show="submitting" x-cloak>Logging in...</span>
        </button>
    </form>

    <p class="mt-6 text-center text-sm text-slate-400">
        No account yet?
        <a href="{{ route('register') }}" class="text-violet-400 hover:text-violet-300 font-medium">Register</a>
    </p>
</x-guest-layout>