<?php

namespace App\Http\Controllers\Auth\student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Student;

class LoginController extends Controller
{
    /**
     * Display the student login view.
     */
    public function create(): View
    {
        return view('auth.student.login');
    }

    /**
     * Handle an incoming student authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->validated();

        if (Auth::guard('student')->attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();

            // Flash success message
            toast_success('Welcome back! You have successfully logged in as Student.');

            return redirect()->intended(route('student.dashboard', absolute: false));
        }

        // Flash error message for failed login
        toast_error('Login failed! Please check your credentials and try again.');

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Destroy an authenticated student session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('student')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // Flash logout success message
        toast_info('You have been successfully logged out. Thank you for using FACONS!');

        return redirect('/');
    }
}