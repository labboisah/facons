<x-guest-layout>
    <div class="space-y-8">
        <div class="text-center">
            <h1 class="text-3xl font-semibold tracking-tight text-slate-900 dark:text-white">Verify your email</h1>
            <p class="mt-3 text-sm text-slate-600 dark:text-slate-400">Please check your inbox and click the link we just sent to confirm your email address.</p>
        </div>

        <div class="rounded-3xl border border-slate-200 bg-slate-50/80 p-6 text-slate-700 shadow-sm dark:border-slate-800 dark:bg-slate-900/80 dark:text-slate-200">
            <p class="text-sm leading-relaxed">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </p>
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="rounded-2xl border border-emerald-200 bg-emerald-50/80 p-4 text-sm font-medium text-emerald-700 shadow-sm dark:border-emerald-800/70 dark:bg-emerald-900/80 dark:text-emerald-200">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="grid gap-3 sm:grid-cols-2">
            <form method="POST" action="{{ route('verification.send') }}" class="w-full">
                @csrf
                <x-primary-button class="w-full">
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </form>

            <form method="POST" action="{{ route('logout') }}" class="w-full">
                @csrf
                <button type="submit" class="inline-flex justify-center w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100 dark:border-slate-700 dark:bg-slate-900 dark:text-slate-200 dark:hover:bg-slate-800 transition">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>
