<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Providers\RouteServiceProvider;
=======
>>>>>>> 87315c8b80b581c7c133bd3357ba2fc416cbc8eb
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
<<<<<<< HEAD
            return redirect()->intended(RouteServiceProvider::HOME);
=======
            return redirect()->intended(route('dashboard', absolute: false));
>>>>>>> 87315c8b80b581c7c133bd3357ba2fc416cbc8eb
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}
