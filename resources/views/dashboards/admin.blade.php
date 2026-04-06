<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="font-semibold text-xl text-slate-900 dark:text-white leading-tight">
                    Admin Dashboard
                </h2>
                <p class="text-sm text-slate-600 dark:text-slate-400 mt-1">Welcome, {{ Auth::user()->name }}!</p>
            </div>
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-200 text-sm font-medium">
                <i class="bi bi-shield-lock" aria-hidden="true"></i>
                Administrator
            </span>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Welcome Card -->
            <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white/90 shadow-xl dark:border-slate-800 dark:bg-slate-900/90">
                <div class="p-8 sm:p-10">
                    <h3 class="text-2xl font-semibold text-slate-900 dark:text-white">System Administration Panel</h3>
                    <p class="mt-3 text-slate-600 dark:text-slate-400">
                        Manage users, system settings, view reports, and monitor platform activity.
                    </p>
                </div>
            </div>

            <!-- Quick Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-600 dark:text-slate-400">Total Users</p>
                            <p class="text-3xl font-bold text-slate-900 dark:text-white mt-2">342</p>
                        </div>
                        <div class="w-12 h-12 rounded-lg bg-red-100 dark:bg-red-900 flex items-center justify-center flex-shrink-0">
                            <i class="bi bi-people text-xl text-red-600 dark:text-red-400" aria-hidden="true"></i>
                        </div>
                    </div>
                    <p class="text-xs text-green-600 dark:text-green-400 mt-3">↑ 12 new this month</p>
                </div>

                <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-600 dark:text-slate-400">Active Courses</p>
                            <p class="text-3xl font-bold text-slate-900 dark:text-white mt-2">18</p>
                        </div>
                        <div class="w-12 h-12 rounded-lg bg-blue-100 dark:bg-blue-900 flex items-center justify-center flex-shrink-0">
                            <i class="bi bi-book text-xl text-blue-600 dark:text-blue-400" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-600 dark:text-slate-400">System Health</p>
                            <p class="text-3xl font-bold text-slate-900 dark:text-white mt-2">99.9%</p>
                        </div>
                        <div class="w-12 h-12 rounded-lg bg-green-100 dark:bg-green-900 flex items-center justify-center flex-shrink-0">
                            <i class="bi bi-activity text-xl text-green-600 dark:text-green-400" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-600 dark:text-slate-400">Pending Actions</p>
                            <p class="text-3xl font-bold text-slate-900 dark:text-white mt-2">8</p>
                        </div>
                        <div class="w-12 h-12 rounded-lg bg-yellow-100 dark:bg-yellow-900 flex items-center justify-center flex-shrink-0">
                            <i class="bi bi-exclamation-circle text-xl text-yellow-600 dark:text-yellow-400" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Admin Tools -->
            <div class="rounded-3xl border border-slate-200 bg-white/90 shadow-xl dark:border-slate-800 dark:bg-slate-900/90">
                <div class="p-8 sm:p-10">
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-6">Administration Tools</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <a href="#" class="rounded-xl border border-slate-200 bg-slate-50 hover:bg-slate-100 p-6 transition dark:border-slate-800 dark:bg-slate-800 dark:hover:bg-slate-700">
                            <i class="bi bi-people-fill text-3xl text-blue-600 dark:text-blue-400 mb-3" aria-hidden="true"></i>
                            <h4 class="font-semibold text-slate-900 dark:text-white">Manage Users</h4>
                            <p class="text-sm text-slate-600 dark:text-slate-400 mt-2">Create, edit, and delete user accounts</p>
                        </a>

                        <a href="#" class="rounded-xl border border-slate-200 bg-slate-50 hover:bg-slate-100 p-6 transition dark:border-slate-800 dark:bg-slate-800 dark:hover:bg-slate-700">
                            <i class="bi bi-gear-fill text-3xl text-purple-600 dark:text-purple-400 mb-3" aria-hidden="true"></i>
                            <h4 class="font-semibold text-slate-900 dark:text-white">System Settings</h4>
                            <p class="text-sm text-slate-600 dark:text-slate-400 mt-2">Configure system preferences and security</p>
                        </a>

                        <a href="#" class="rounded-xl border border-slate-200 bg-slate-50 hover:bg-slate-100 p-6 transition dark:border-slate-800 dark:bg-slate-800 dark:hover:bg-slate-700">
                            <i class="bi bi-graph-up text-3xl text-green-600 dark:text-green-400 mb-3" aria-hidden="true"></i>
                            <h4 class="font-semibold text-slate-900 dark:text-white">View Reports</h4>
                            <p class="text-sm text-slate-600 dark:text-slate-400 mt-2">Access analytics and system reports</p>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
