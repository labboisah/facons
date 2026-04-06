@extends('layouts.guest')

@section('title', ' - Lecturer Login')

@section('content')

<!-- header -->

    <h2 class="text-2xl font-bold text-green-700 mb-2 text-center flex items-center justify-center gap-2">
        <i class="bi bi-shield-lock" aria-hidden="true"></i>
        Student Login
    </h2>

    <form class="space-y-5" method="POST" action="{{ route('student.login.store') }}">
        @csrf
        <!-- EMAIL -->
        <div>
            <label class="text-sm text-gray-600">Email</label>
            <div class="relative">
                <i class="bi bi-envelope absolute left-3 top-3 text-gray-400"></i>
                <input type="email" class="w-full pl-10 py-3 border rounded-lg focus:ring-2 focus:ring-green-600 outline-none" placeholder="Enter your email">
            </div>
        </div>

        <!-- PASSWORD -->
        <div>
            <label class="text-sm text-gray-600">Password</label>
            <div class="relative">
                <i class="bi bi-lock absolute left-3 top-3 text-gray-400"></i>
                <input id="password" type="password" class="w-full pl-10 pr-10 py-3 border rounded-lg focus:ring-2 focus:ring-green-600 outline-none" placeholder="Enter password">
                <button type="button" onclick="togglePassword()" class="absolute right-3 top-3 text-gray-500">
                    <i id="eyeIcon" class="bi bi-eye"></i>
                </button>
            </div>
        </div>

        <!-- OPTIONS -->
        <div class="flex justify-between text-sm">
            <label class="flex items-center gap-2">
                <input type="checkbox"> Remember me
            </label>
            <a href="#" class="text-green-700 hover:underline"> Forgot password?</a>
        </div>

        <!-- LOGIN BUTTON -->
        <button class="w-full bg-green-700 hover:bg-green-600 text-white py-3 rounded-lg font-semibold">
            <i class="bi bi-box-arrow-in-right mr-2"></i>
            Login
        </button>

    </form>

@endsection