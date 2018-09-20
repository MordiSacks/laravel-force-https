<?php

namespace MordiSacks\LaravelForceHttps;

use Closure;

class ForceHttps
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (
            !$request->secure()
            && substr(config('app.url'), 0, 5) === 'https'
        ) {

            $secureUrl = 'https://' . $request->getHttpHost() . $request->getRequestUri();

            return redirect($secureUrl);
        }

        return $next($request);
    }
}
