<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Providers\RouteServiceProvider;
=======
>>>>>>> 87315c8b80b581c7c133bd3357ba2fc416cbc8eb
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        return $request->user()->hasVerifiedEmail()
<<<<<<< HEAD
                    ? redirect()->intended(RouteServiceProvider::HOME)
=======
                    ? redirect()->intended(route('dashboard', absolute: false))
>>>>>>> 87315c8b80b581c7c133bd3357ba2fc416cbc8eb
                    : view('auth.verify-email');
    }
}
