<?php

namespace App\Http\Controllers\Auth\lecturer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    /**
     * Display the lecturer login view.
     */
    public function create(): View
    {
        return view('auth.lecturer.login');
    }

    /**
     * Handle an incoming lecturer authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->validated();

        if (Auth::guard('lecturer')->attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();

            // Flash success message
            toast_success('Welcome back! You have successfully logged in as Lecturer.');

            return redirect()->intended(route('lecturer.dashboard', absolute: false));
        }

        // Flash error message for failed login
        toast_error('Login failed! Please check your credentials and try again.');

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Destroy an authenticated lecturer session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('lecturer')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // Flash logout success message
        toast_info('You have been successfully logged out. Thank you for using FACONS!');

        return redirect('/');
    }
}