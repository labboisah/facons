<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="font-semibold text-xl text-slate-900 dark:text-white leading-tight">
                    Student Dashboard
                </h2>
                <p class="text-sm text-slate-600 dark:text-slate-400 mt-1">Welcome, {{ Auth::user()->name }}!</p>
            </div>
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100 text-blue-700 dark:bg-blue-900 dark:text-blue-200 text-sm font-medium">
                <i class="bi bi-mortarboard" aria-hidden="true"></i>
                Student
            </span>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Welcome Card -->
            <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white/90 shadow-xl dark:border-slate-800 dark:bg-slate-900/90">
                <div class="p-8 sm:p-10">
                    <h3 class="text-2xl font-semibold text-slate-900 dark:text-white">Welcome back!</h3>
                    <p class="mt-3 text-slate-600 dark:text-slate-400">
                        You're logged in as a student. Access your courses, view grades, and submit assignments from your dashboard.
                    </p>
                </div>
            </div>

            <!-- Quick Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-600 dark:text-slate-400">Enrolled Courses</p>
                            <p class="text-3xl font-bold text-slate-900 dark:text-white mt-2">5</p>
                        </div>
                        <div class="w-12 h-12 rounded-lg bg-blue-100 dark:bg-blue-900 flex items-center justify-center flex-shrink-0">
                            <i class="bi bi-book text-xl text-blue-600 dark:text-blue-400" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-600 dark:text-slate-400">Current GPA</p>
                            <p class="text-3xl font-bold text-slate-900 dark:text-white mt-2">3.8</p>
                        </div>
                        <div class="w-12 h-12 rounded-lg bg-green-100 dark:bg-green-900 flex items-center justify-center flex-shrink-0">
                            <i class="bi bi-star text-xl text-green-600 dark:text-green-400" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-600 dark:text-slate-400">Pending Assignments</p>
                            <p class="text-3xl font-bold text-slate-900 dark:text-white mt-2">3</p>
                        </div>
                        <div class="w-12 h-12 rounded-lg bg-yellow-100 dark:bg-yellow-900 flex items-center justify-center flex-shrink-0">
                            <i class="bi bi-clipboard-check text-xl text-yellow-600 dark:text-yellow-400" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-600 dark:text-slate-400">Attendance Rate</p>
                            <p class="text-3xl font-bold text-slate-900 dark:text-white mt-2">92%</p>
                        </div>
                        <div class="w-12 h-12 rounded-lg bg-purple-100 dark:bg-purple-900 flex items-center justify-center flex-shrink-0">
                            <i class="bi bi-check-circle text-xl text-purple-600 dark:text-purple-400" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- My Courses -->
            <div class="rounded-3xl border border-slate-200 bg-white/90 shadow-xl dark:border-slate-800 dark:bg-slate-900/90">
                <div class="p-8 sm:p-10">
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-6">My Courses</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-800">
                            <h4 class="font-semibold text-slate-900 dark:text-white">Basic Nursing</h4>
                            <p class="text-sm text-slate-600 dark:text-slate-400 mt-2">Instructor: Dr. Sarah Johnson</p>
                            <div class="mt-4 bg-slate-300 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 75%;"></div>
                            </div>
                            <p class="text-xs text-slate-600 dark:text-slate-400 mt-2">75% Complete</p>
                        </div>

                        <div class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-800">
                            <h4 class="font-semibold text-slate-900 dark:text-white">Anatomy & Physiology</h4>
                            <p class="text-sm text-slate-600 dark:text-slate-400 mt-2">Instructor: Prof. Ahmed Khan</p>
                            <div class="mt-4 bg-slate-300 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 60%;"></div>
                            </div>
                            <p class="text-xs text-slate-600 dark:text-slate-400 mt-2">60% Complete</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
