<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckCompanyRegistration
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $slug = $request->route('slug');
        $company = Company::where('slug', $slug)->first();

        if (!$company || !$company->users()->where('user_id', Auth::id())->exists()) {
            if (Auth::check() && Auth::user()->role->name == 'super-admin') {
                return $next($request);
            }
            Auth::logout();
        }

        return $next($request);
    }
}
