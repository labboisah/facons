<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="font-semibold text-xl text-slate-900 dark:text-white leading-tight">
                    Lecturer Dashboard
                </h2>
                <p class="text-sm text-slate-600 dark:text-slate-400 mt-1">Welcome, {{ Auth::user()->name }}!</p>
            </div>
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-100 text-purple-700 dark:bg-purple-900 dark:text-purple-200 text-sm font-medium">
                <i class="bi bi-person-fill" aria-hidden="true"></i>
                Lecturer
            </span>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Welcome Card -->
            <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white/90 shadow-xl dark:border-slate-800 dark:bg-slate-900/90">
                <div class="p-8 sm:p-10">
                    <h3 class="text-2xl font-semibold text-slate-900 dark:text-white">Welcome back, Lecturer!</h3>
                    <p class="mt-3 text-slate-600 dark:text-slate-400">
                        Manage your courses, grade students, upload materials, and track student progress.
                    </p>
                </div>
            </div>

            <!-- Quick Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-600 dark:text-slate-400">Teaching Courses</p>
                            <p class="text-3xl font-bold text-slate-900 dark:text-white mt-2">3</p>
                        </div>
                        <div class="w-12 h-12 rounded-lg bg-purple-100 dark:bg-purple-900 flex items-center justify-center flex-shrink-0">
                            <i class="bi bi-book text-xl text-purple-600 dark:text-purple-400" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-600 dark:text-slate-400">Total Students</p>
                            <p class="text-3xl font-bold text-slate-900 dark:text-white mt-2">87</p>
                        </div>
                        <div class="w-12 h-12 rounded-lg bg-blue-100 dark:bg-blue-900 flex items-center justify-center flex-shrink-0">
                            <i class="bi bi-people text-xl text-blue-600 dark:text-blue-400" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-600 dark:text-slate-400">Pending Grading</p>
                            <p class="text-3xl font-bold text-slate-900 dark:text-white mt-2">12</p>
                        </div>
                        <div class="w-12 h-12 rounded-lg bg-yellow-100 dark:bg-yellow-900 flex items-center justify-center flex-shrink-0">
                            <i class="bi bi-pencil-square text-xl text-yellow-600 dark:text-yellow-400" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-600 dark:text-slate-400">Materials Uploaded</p>
                            <p class="text-3xl font-bold text-slate-900 dark:text-white mt-2">45</p>
                        </div>
                        <div class="w-12 h-12 rounded-lg bg-green-100 dark:bg-green-900 flex items-center justify-center flex-shrink-0">
                            <i class="bi bi-file-earmark-check text-xl text-green-600 dark:text-green-400" aria-hidden="true"></i>
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
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h4 class="font-semibold text-slate-900 dark:text-white">Basic Nursing 101</h4>
                                    <p class="text-sm text-slate-600 dark:text-slate-400 mt-1">30 Students</p>
                                </div>
                                <button class="px-3 py-1 text-sm bg-purple-600 text-white rounded hover:bg-purple-700 transition">Manage</button>
                            </div>
                        </div>

                        <div class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-800">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h4 class="font-semibold text-slate-900 dark:text-white">Clinical Practice II</h4>
                                    <p class="text-sm text-slate-600 dark:text-slate-400 mt-1">25 Students</p>
                                </div>
                                <button class="px-3 py-1 text-sm bg-purple-600 text-white rounded hover:bg-purple-700 transition">Manage</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
