<?php

namespace App\Http\Middleware;

<<<<<<< HEAD
// use Auth;
=======
>>>>>>> 87315c8b80b581c7c133bd3357ba2fc416cbc8eb
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD

=======
>>>>>>> 87315c8b80b581c7c133bd3357ba2fc416cbc8eb
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
<<<<<<< HEAD
        if (Auth::user()->usertype != 'admin')
=======
        if (Auth::user()-> usertype !='admin')
>>>>>>> 87315c8b80b581c7c133bd3357ba2fc416cbc8eb
        {
            return redirect('/');
        }
        return $next($request);
    }
}
