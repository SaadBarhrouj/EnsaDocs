<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the admin session exists
        if (!session('admin_logged_in')) {
            // Redirect to the login page if not logged in
            return redirect()->route('admin.login')->withErrors(['error' => 'Veuillez vous connecter en tant qu\'administrateur.']);
        }

        // Allow the request to continue
        return $next($request);
    }

}
