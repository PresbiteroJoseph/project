<x-guest-layout>
    <h1 class="text-2xl font-bold mb-1">Create account</h1>
    <p class="text-slate-400 text-sm mb-6">Join and start managing your gamers.</p>

    <form method="POST" action="{{ route('register') }}" x-data="{ submitting: false }" @submit="submitting = true" class="space-y-5">
        @csrf

        <div>
            <label for="name" class="block text-sm text-slate-300 mb-1">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                class="w-full rounded-lg bg-slate-800 border border-slate-700 px-4 py-2.5 text-slate-100 focus:border-violet-500 focus:ring-violet-500">
            @error('name') <p class="mt-2 text-sm text-rose-400">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="email" class="block text-sm text-slate-300 mb-1">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required
                class="w-full rounded-lg bg-slate-800 border border-slate-700 px-4 py-2.5 text-slate-100 focus:border-violet-500 focus:ring-violet-500">
            @error('email') <p class="mt-2 text-sm text-rose-400">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="password" class="block text-sm text-slate-300 mb-1">Password</label>
            <input id="password" type="password" name="password" required
                class="w-full rounded-lg bg-slate-800 border border-slate-700 px-4 py-2.5 text-slate-100 focus:border-violet-500 focus:ring-violet-500">
            @error('password') <p class="mt-2 text-sm text-rose-400">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="password_confirmation" class="block text-sm text-slate-300 mb-1">Confirm password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required
                class="w-full rounded-lg bg-slate-800 border border-slate-700 px-4 py-2.5 text-slate-100 focus:border-violet-500 focus:ring-violet-500">
        </div>

        <button type="submit" :disabled="submitting"
            class="w-full rounded-lg bg-violet-600 py-2.5 font-semibold text-white hover:bg-violet-500 transition disabled:opacity-60 disabled:cursor-not-allowed">
            <span x-show="!submitting">Register</span>
            <span x-show="submitting" x-cloak>Creating account...</span>
        </button>
    </form>

    <p class="mt-6 text-center text-sm text-slate-400">
        Already registered?
        <a href="{{ route('login') }}" class="text-violet-400 hover:text-violet-300 font-medium">Log in</a>
    </p>
</x-guest-layout>