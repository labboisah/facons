<x-guest-layout>
    <div class="space-y-8">
        <div class="text-center">
            <h1 class="text-3xl font-semibold tracking-tight text-slate-900 dark:text-white">Reset your password</h1>
            <p class="mt-3 text-sm text-slate-600 dark:text-slate-400">Enter your email and we’ll send a secure link so you can choose a new password.</p>
        </div>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
            @csrf

            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex flex-col gap-3">
                <x-primary-button class="w-full">
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>

                <a href="{{ route('login') }}" class="inline-flex justify-center w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100 dark:border-slate-700 dark:bg-slate-900 dark:text-slate-200 dark:hover:bg-slate-800 transition">
                    {{ __('Back to login') }}
                </a>
            </div>
        </form>
    </div>
</x-guest-layout>
