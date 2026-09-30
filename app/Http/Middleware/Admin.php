<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->role == 'admin') {
                return $next($request);
            } else {
                abort(403);
            }
        } else {
            return redirect('/');
        }
    }

    public function terminate($request, $response)
    {
        \Log::info('Request selesai', ['url' => $request->fullUrl()]);
    }
}
