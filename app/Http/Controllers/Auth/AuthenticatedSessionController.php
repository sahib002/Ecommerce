<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
<<<<<<< HEAD
use App\Providers\RouteServiceProvider;
=======
>>>>>>> 87315c8b80b581c7c133bd3357ba2fc416cbc8eb
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

<<<<<<< HEAD
        if ($request->user()->usertype === 'admin') #condition 
        {
            return redirect('admin/dashboard'); 
=======
        if ($request->user()->usertype==='admin')
        {
             return redirect('admin/dashboard');
>>>>>>> 87315c8b80b581c7c133bd3357ba2fc416cbc8eb
        }

        return redirect()->intended(route('dashboard'));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
