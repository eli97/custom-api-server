<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SayCheese
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        dump(var:"Cheese");
            return $next($request);
            //return new JsonResponse(
              //  ['data' => 'cheeeeese'],
            //);
    }

    public function terminate(Request $request, Response $response)
    {
        dump(var:"Goodbye");
    }
}
