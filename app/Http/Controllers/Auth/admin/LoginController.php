<?php

namespace App\Http\Controllers\Auth\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    /**
     * Display the admin login view.
     */
    public function create(): View
    {
        return view('auth.admin.login');
    }

    /**
     * Handle an incoming admin authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->validated();

        if (Auth::guard('web')->attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();

            // Flash success message
            toast_success('Welcome back! You have successfully logged in as Administrator.');

            return redirect()->intended(route('admin.dashboard', absolute: false));
        }

        // Flash error message for failed login
        toast_error('Login failed! Please check your credentials and try again.');

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Destroy an authenticated admin session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // Flash logout success message
        toast_info('You have been successfully logged out. Thank you for using FACONS!');

        return redirect('/');
    }
}