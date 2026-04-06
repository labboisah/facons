<x-guest-layout>
    <div class="space-y-8">
        <div class="text-center">
            <h1 class="text-3xl font-semibold tracking-tight text-slate-900 dark:text-white">Confirm your password</h1>
            <p class="mt-3 text-sm text-slate-600 dark:text-slate-400">For security, please verify your password before continuing to the protected area.</p>
        </div>

        <form method="POST" action="{{ route('password.confirm') }}" class="space-y-6">
            @csrf

            <div>
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <x-primary-button class="w-full">
                {{ __('Confirm') }}
            </x-primary-button>
        </form>
    </div>
</x-guest-layout>
