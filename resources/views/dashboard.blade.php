<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-900 dark:text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white/90 shadow-xl dark:border-slate-800 dark:bg-slate-900/90">
                <div class="p-8 sm:p-10 text-slate-900 dark:text-slate-100">
                    <h3 class="text-2xl font-semibold">{{ __('Welcome back, :name!', ['name' => Auth::user()->name]) }}</h3>
                    <p class="mt-3 max-w-2xl text-sm leading-6 text-slate-600 dark:text-slate-400">
                        {{ __('You are logged in and ready to manage your profile, settings, and any active projects.') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
